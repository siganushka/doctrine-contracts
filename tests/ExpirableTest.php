<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\ExpirableInterface;
use Siganushka\Contracts\Doctrine\ExpirableTrait;

class ExpirableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooExpirable();
        static::assertNull($entity->getExpiredAt());

        $now = new \DateTimeImmutable();

        $entity->setExpiredAt($expiredAt = $now->modify('+1 hours'));
        static::assertSame($expiredAt, $entity->getExpiredAt());

        $entity->setExpiredAt($expiredAt = $now->modify('-1 seconds'));
        static::assertSame($expiredAt, $entity->getExpiredAt());
    }

    public function testMethods(): void
    {
        $entity = new FooExpirable();
        static::assertSame([
            'getExpiredAt',
            'setExpiredAt',
        ], get_class_methods($entity));
    }
}

class FooExpirable implements ExpirableInterface
{
    use ExpirableTrait;
}
