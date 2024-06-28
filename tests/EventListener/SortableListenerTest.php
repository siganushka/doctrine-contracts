<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Doctrine\Persistence\ObjectManager;
use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\EventListener\SortableListener;
use Siganushka\Contracts\Doctrine\SortableInterface;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooSortable;

final class SortableListenerTest extends TestCase
{
    public function testPrePersist(): void
    {
        $foo = new FooSortable();

        static::assertInstanceOf(SortableInterface::class, $foo);
        static::assertNull($foo->getSort());

        $lifecycleEventArgs = new LifecycleEventArgs($foo, $this->createMock(ObjectManager::class));

        $listener = new SortableListener();
        $listener->prePersist($lifecycleEventArgs);

        static::assertSame(SortableInterface::DEFAULT_SORT, $foo->getSort());

        // set value if not set
        $foo->setSort(128);
        $listener->prePersist($lifecycleEventArgs);

        static::assertSame(128, $foo->getSort());
    }

    public function testPreUpdate(): void
    {
        $foo = new FooSortable();

        static::assertInstanceOf(SortableInterface::class, $foo);
        static::assertNull($foo->getSort());

        $lifecycleEventArgs = new LifecycleEventArgs($foo, $this->createMock(ObjectManager::class));

        $listener = new SortableListener();
        $listener->preUpdate($lifecycleEventArgs);

        static::assertSame(SortableInterface::DEFAULT_SORT, $foo->getSort());

        // set value if not set
        $foo->setSort(128);
        $listener->preUpdate($lifecycleEventArgs);

        static::assertSame(128, $foo->getSort());
    }
}
