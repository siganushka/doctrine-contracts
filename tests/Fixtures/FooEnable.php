<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Fixtures;

use Siganushka\Contracts\Doctrine\EnableInterface;
use Siganushka\Contracts\Doctrine\EnableTrait;

class FooEnable implements EnableInterface
{
    use EnableTrait;
}
