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

        $entity->setCreatedAt(new \DateTimeImmutable());
        static::assertInstanceOf(\DateTimeImmutable::class, $entity->getCreatedAt());
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
