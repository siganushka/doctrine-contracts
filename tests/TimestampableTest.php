<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\TimestampableInterface;
use Siganushka\Contracts\Doctrine\TimestampableTrait;

class TimestampableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooTimestampable();
        static::assertNull($entity->getCreatedAt());
        static::assertNull($entity->getUpdatedAt());

        $entity->setCreatedAt(new \DateTimeImmutable());
        static::assertInstanceOf(\DateTimeImmutable::class, $entity->getCreatedAt());

        $entity->setUpdatedAt(new \DateTimeImmutable());
        static::assertInstanceOf(\DateTimeImmutable::class, $entity->getUpdatedAt());
    }

    public function testMethods(): void
    {
        $entity = new FooTimestampable();
        static::assertSame([
            'getCreatedAt',
            'setCreatedAt',
            'getUpdatedAt',
            'setUpdatedAt',
        ], get_class_methods($entity));
    }
}

class FooTimestampable implements TimestampableInterface
{
    use TimestampableTrait;
}
