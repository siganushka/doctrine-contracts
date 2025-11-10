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

        $entity->setUpdatedAt(new \DateTimeImmutable());
        static::assertInstanceOf(\DateTimeImmutable::class, $entity->getUpdatedAt());
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
