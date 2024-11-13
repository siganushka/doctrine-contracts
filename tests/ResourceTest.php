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
}

class FooResource implements ResourceInterface
{
    use ResourceTrait;
}
