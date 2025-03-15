<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\VersionableInterface;
use Siganushka\Contracts\Doctrine\VersionableTrait;

class VersionableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooVersionable();
        static::assertNull($entity->getVersion());
    }

    public function testMethods(): void
    {
        $entity = new FooVersionable();
        static::assertSame([
            'getVersion',
            'setVersion',
        ], get_class_methods($entity));
    }

    public function testBadMethodCallException(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage('The version cannot be set manually');

        $entity = new FooVersionable();
        $entity->setVersion(128);
    }
}

class FooVersionable implements VersionableInterface
{
    use VersionableTrait;
}
