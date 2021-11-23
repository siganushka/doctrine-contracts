<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\SortableInterface;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooSortable;

class SortableTest extends TestCase
{
    public function testAll()
    {
        $entity = new FooSortable();
        static::assertInstanceOf(SortableInterface::class, $entity);
        static::assertNull($entity->getSorted());

        $entity->setSorted(128);
        static::assertSame(128, $entity->getSorted());
    }
}
