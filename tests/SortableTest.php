<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\SortableInterface;
use Siganushka\Contracts\Doctrine\SortableTrait;

class SortableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooSortable();
        static::assertSame(0, $entity->getSort());

        $entity->setSort(128);
        static::assertSame(128, $entity->getSort());

        $entity->setSort(null);
        static::assertNull($entity->getSort());
    }
}

class FooSortable implements SortableInterface
{
    use SortableTrait;
}
