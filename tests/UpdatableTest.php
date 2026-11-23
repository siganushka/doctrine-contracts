<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\UpdatableInterface;
use Siganushka\Contracts\Doctrine\UpdatableTrait;

class UpdatableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooUpdatable();
        static::assertNull($entity->getUpdatedAt());

        $updatedAt = new \DateTimeImmutable();

        static::assertSame($entity, $entity->setUpdatedAt($updatedAt));
        static::assertSame($updatedAt, $entity->getUpdatedAt());
    }

    public function testMethods(): void
    {
        $entity = new FooUpdatable();
        static::assertSame([
            'getUpdatedAt',
            'setUpdatedAt',
        ], get_class_methods($entity));
    }
}

class FooUpdatable implements UpdatableInterface
{
    use UpdatableTrait;
}
