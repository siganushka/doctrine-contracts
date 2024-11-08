<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\EnableInterface;
use Siganushka\Contracts\Doctrine\Tests\Fixtures\FooEnable;

class EnableTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooEnable();
        static::assertInstanceOf(EnableInterface::class, $entity);
        static::assertTrue($entity->isEnabled());

        $entity->setEnabled(false);
        static::assertFalse($entity->isEnabled());
    }
}
