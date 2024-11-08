<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooVersionable;
use Siganushka\Contracts\Doctrine\VersionableInterface;

class VersionableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooVersionable();
        static::assertInstanceOf(VersionableInterface::class, $entity);
        static::assertNull($entity->getVersion());
    }

    public function testBadMethodCallException(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage('The version cannot be set manually');

        $entity = new FooVersionable();
        $entity->setVersion(128);
    }
}
