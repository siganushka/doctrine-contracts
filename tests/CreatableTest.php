<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\CreatableInterface;
use Siganushka\Contracts\Doctrine\CreatableTrait;

class CreatableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooCreatable();
        static::assertNull($entity->getCreatedAt());

        $createdAt = new \DateTimeImmutable();

        static::assertSame($entity, $entity->setCreatedAt($createdAt));
        static::assertSame($createdAt, $entity->getCreatedAt());
    }

    public function testMethods(): void
    {
        $entity = new FooCreatable();
        static::assertSame([
            'getCreatedAt',
            'setCreatedAt',
        ], get_class_methods($entity));
    }
}

class FooCreatable implements CreatableInterface
{
    use CreatableTrait;
}
