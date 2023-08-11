<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\EventListener;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

/**
 * @see https://www.doctrine-project.org/projects/doctrine-orm/en/latest/cookbook/sql-table-prefixes.html
 */
class TablePrefixListener
{
    private string $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * @psalm-suppress PossiblyUndefinedArrayOffset
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs $event): void
    {
        /** @var ClassMetadataInfo */
        $classMetadata = $event->getClassMetadata();
        if (!$classMetadata->isInheritanceTypeSingleTable()
            || $classMetadata->getName() === $classMetadata->rootEntityName) {
            $classMetadata->setPrimaryTable([
                'name' => $this->prefix.$classMetadata->getTableName(),
            ]);
        }

        foreach ($classMetadata->getAssociationMappings() as $fieldName => $mapping) {
            if (ClassMetadataInfo::MANY_TO_MANY === $mapping['type'] && $mapping['isOwningSide']) {
                $classMetadata->associationMappings[$fieldName]['joinTable']['name'] = $this->prefix.$mapping['joinTable']['name'];
            }
        }
    }
}
