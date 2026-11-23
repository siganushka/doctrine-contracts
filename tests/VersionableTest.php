<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\VersionableInterface;
use Siganushka\Contracts\Doctrine\VersionableTrait;

class VersionableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooVersionable();
        static::assertNull($entity->getVersion());

        static::assertSame($entity, $entity->setVersion(1));
        static::assertSame(1, $entity->getVersion());

        static::assertSame($entity, $entity->setVersion(null));
        static::assertNull($entity->getVersion());
    }

    public function testMethods(): void
    {
        $entity = new FooVersionable();
        static::assertSame([
            'getVersion',
            'setVersion',
        ], get_class_methods($entity));
    }
}

class FooVersionable implements VersionableInterface
{
    use VersionableTrait;
}
