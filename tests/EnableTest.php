<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\EnableInterface;
use Siganushka\Contracts\Doctrine\EnableTrait;

class EnableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooEnable();
        static::assertTrue($entity->isEnabled());

        $entity->setEnabled(false);
        static::assertFalse($entity->isEnabled());
    }
}

class FooEnable implements EnableInterface
{
    use EnableTrait;
}
