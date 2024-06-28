<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Doctrine\Persistence\ObjectManager;
use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\EventListener\TimestampableListener;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooTimestampable;
use Siganushka\Contracts\Doctrine\TimestampableInterface;

final class TimestampableListenerTest extends TestCase
{
    public function testPrePersist(): void
    {
        $foo = new FooTimestampable();

        static::assertInstanceOf(TimestampableInterface::class, $foo);
        static::assertNull($foo->getCreatedAt());

        $lifecycleEventArgs = new LifecycleEventArgs($foo, $this->createMock(ObjectManager::class));

        $listener = new TimestampableListener();
        $listener->prePersist($lifecycleEventArgs);

        static::assertInstanceOf(\DateTimeImmutable::class, $foo->getCreatedAt());
    }

    public function testPreUpdate(): void
    {
        $foo = new FooTimestampable();

        static::assertInstanceOf(TimestampableInterface::class, $foo);
        static::assertNull($foo->getUpdatedAt());

        $lifecycleEventArgs = new LifecycleEventArgs($foo, $this->createMock(ObjectManager::class));

        $listener = new TimestampableListener();
        $listener->preUpdate($lifecycleEventArgs);

        static::assertInstanceOf(\DateTimeInterface::class, $foo->getUpdatedAt());
    }
}
