<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\DateRangeInterface;
use Siganushka\Contracts\Doctrine\DateRangeTrait;

class DateRangeTest extends TestCase
{
    public function testAll(): void
    {
        $entity = new FooDateRange();
        static::assertNull($entity->getStartDate());
        static::assertNull($entity->getEndDate());

        $entity->setStartDate(new \DateTime());
        static::assertInstanceOf(\DateTime::class, $entity->getStartDate());

        $entity->setEndDate(new \DateTime());
        static::assertInstanceOf(\DateTime::class, $entity->getEndDate());
    }
}

class FooDateRange implements DateRangeInterface
{
    use DateRangeTrait;
}
