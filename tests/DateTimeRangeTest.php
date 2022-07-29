<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\DateTimeRangeInterface;
use Siganushka\Contracts\Doctrine\Tests\Mock\DateTimeRange;

class DateTimeRangeTest extends TestCase
{
    public function testAll(): void
    {
        $now = new \DateTimeImmutable();

        $entity = new DateTimeRange();
        static::assertInstanceOf(DateTimeRangeInterface::class, $entity);
        static::assertNull($entity->getBeginAt());
        static::assertNull($entity->getEndAt());

        $entity->setBeginAt($startAt = $now->setTime(2, 0, 0));
        static::assertSame($entity->getBeginAt(), $startAt);

        $entity->setEndAt($endAt = $now->setTime(22, 0, 0));
        static::assertSame($entity->getEndAt(), $endAt);
    }
}
