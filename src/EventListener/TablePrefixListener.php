<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\EventListener;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

class TablePrefixListener
{
    private string $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function loadClassMetadata(LoadClassMetadataEventArgs $event): void
    {
        /**
         * @var ClassMetadataInfo
         */
        $classMetadata = $event->getClassMetadata();
        if (!$classMetadata->isInheritanceTypeSingleTable()
            || $classMetadata->getName() === $classMetadata->rootEntityName) {
            $classMetadata->setPrimaryTable([
                'name' => $this->prefix.$classMetadata->getTableName(),
            ]);
        }

        /**
         * @var array{ type: int, isOwningSide: bool, joinTable: array{ name: string } } $mapping
         */
        foreach ($classMetadata->getAssociationMappings() as $fieldName => $mapping) {
            if (ClassMetadataInfo::MANY_TO_MANY === $mapping['type'] && $mapping['isOwningSide']) {
                $classMetadata->associationMappings[$fieldName]['joinTable']['name'] = $this->prefix.$mapping['joinTable']['name'];
            }
        }
    }
}
