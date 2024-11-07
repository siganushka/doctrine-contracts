<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\EventListener;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\JoinTableMapping;
use Doctrine\ORM\Mapping\UnderscoreNamingStrategy;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\EventListener\TablePrefixListener;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooResource;

final class TablePrefixListenerTest extends TestCase
{
    public function testLoadClassMetadata(): void
    {
        $namingStrategy = new UnderscoreNamingStrategy(\CASE_LOWER);
        $reflection = new \ReflectionClass(FooResource::class);

        $classMetadata = new ClassMetadata(FooResource::class, $namingStrategy);
        $classMetadata->table['name'] = $namingStrategy->classToTableName(FooResource::class);
        $classMetadata->reflClass = $reflection;
        $classMetadata->namespace = $reflection->getNamespaceName();
        $classMetadata->name = $reflection->getName();
        $classMetadata->rootEntityName = $reflection->getName();

        $classMetadata->mapManyToMany([
            'fieldName' => 'bars',
            'targetEntity' => 'Bar',
        ]);

        /** @var MockObject&LoadClassMetadataEventArgs */
        $loadClassMetadataEventArgs = $this->createMock(LoadClassMetadataEventArgs::class);
        $loadClassMetadataEventArgs->expects(static::any())
            ->method('getClassMetadata')
            ->willReturn($classMetadata)
        ;

        $listener = new TablePrefixListener('app_');
        $listener->loadClassMetadata($loadClassMetadataEventArgs);

        /** @var JoinTableMapping */
        $joinTable = $classMetadata->associationMappings['bars']['joinTable'];
        static::assertSame('app_foo_resource', $classMetadata->getTableName());
        static::assertSame('app_foo_resource_bar', $joinTable->name);
    }
}
