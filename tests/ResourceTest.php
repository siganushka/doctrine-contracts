<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\ResourceInterface;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooResource;

class ResourceTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooResource();
        static::assertInstanceOf(ResourceInterface::class, $entity);
        static::assertNull($entity->getId());
    }
}
