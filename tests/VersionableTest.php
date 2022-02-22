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

        $entity->setVersion(128);
        static::assertSame(128, $entity->getVersion());
    }
}
