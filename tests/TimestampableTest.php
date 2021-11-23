<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooTimestampable;
use Siganushka\Contracts\Doctrine\TimestampableInterface;

class TimestampableTest extends TestCase
{
    public function testAll()
    {
        $entity = new FooTimestampable();
        static::assertInstanceOf(TimestampableInterface::class, $entity);
        static::assertNull($entity->getUpdatedAt());
        static::assertNull($entity->getCreatedAt());

        $entity->setUpdatedAt(new \DateTime());
        static::assertInstanceOf(\DateTimeInterface::class, $entity->getUpdatedAt());

        $entity->setCreatedAt(new \DateTimeImmutable());
        static::assertInstanceOf(\DateTimeInterface::class, $entity->getCreatedAt());
    }
}
