<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Embeddable;

use PHPUnit\Framework\TestCase;
use Siganushka\Contracts\Doctrine\Embeddable\DateTimeRange;

class DateTimeRangeTest extends TestCase
{
    public function testAll(): void
    {
        $now = new \DateTimeImmutable();

        $embeddable = new DateTimeRange();
        static::assertNull($embeddable->getBeginAt());
        static::assertNull($embeddable->getEndAt());

        $embeddable->setBeginAt($startAt = $now->setTime(2, 0, 0));
        static::assertSame($startAt, $embeddable->getBeginAt());

        $embeddable->setEndAt($endAt = $now->setTime(22, 0, 0));
        static::assertSame($endAt, $embeddable->getEndAt());
    }
}
