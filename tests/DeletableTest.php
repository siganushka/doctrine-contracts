<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\DeletableInterface;
use Siganushka\Contracts\Doctrine\DeletableTrait;

class DeletableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooDeletable();
        static::assertNull($entity->getDeletedAt());

        $entity->setDeletedAt(new \DateTimeImmutable());
        static::assertInstanceOf(\DateTimeImmutable::class, $entity->getDeletedAt());
    }

    public function testMethods(): void
    {
        $entity = new FooDeletable();
        static::assertSame([
            'getDeletedAt',
            'setDeletedAt',
        ], get_class_methods($entity));
    }
}

class FooDeletable implements DeletableInterface
{
    use DeletableTrait;
}
