<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\DateTimeRangeInterface;
use Siganushka\Contracts\Doctrine\DateTimeRangeTrait;

class DateTimeRangeTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooDateTimeRange();
        static::assertNull($entity->getStartAt());
        static::assertNull($entity->getEndAt());

        $entity->setStartAt(new \DateTime());
        static::assertInstanceOf(\DateTime::class, $entity->getStartAt());

        $entity->setEndAt(new \DateTime());
        static::assertInstanceOf(\DateTime::class, $entity->getStartAt());
    }
}

class FooDateTimeRange implements DateTimeRangeInterface
{
    use DateTimeRangeTrait;
}
