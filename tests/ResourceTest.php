<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\ResourceInterface;
use Siganushka\Contracts\Doctrine\ResourceTrait;

class ResourceTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooResource();
        static::assertNull($entity->getId());
    }

    public function testMethods(): void
    {
        $entity = new FooResource();
        static::assertSame([
            'getId',
        ], get_class_methods($entity));
    }
}

class FooResource implements ResourceInterface
{
    use ResourceTrait;
}
