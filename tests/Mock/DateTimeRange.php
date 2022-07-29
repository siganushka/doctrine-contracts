<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Mock;

use Siganushka\Contracts\Doctrine\DateTimeRangeInterface;
use Siganushka\Contracts\Doctrine\DateTimeRangeTrait;

class DateTimeRange implements DateTimeRangeInterface
{
    use DateTimeRangeTrait;
}
