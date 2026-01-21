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
        static::assertSame(0, $entity->getDeleted());

        $entity->setDeleted(255);
        static::assertSame(255, $entity->getDeleted());
    }

    public function testMethods(): void
    {
        $entity = new FooDeletable();
        static::assertSame([
            'getDeleted',
            'setDeleted',
            'getDeletedAt',
            'setDeletedAt',
        ], get_class_methods($entity));
    }
}

class FooDeletable implements DeletableInterface
{
    use DeletableTrait;
}
