<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Fixtures;

use Siganushka\Contracts\Doctrine\SortableInterface;
use Siganushka\Contracts\Doctrine\SortableTrait;

class FooSortable implements SortableInterface
{
    use SortableTrait;
}
