<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Mock;

use Siganushka\Contracts\Doctrine\EnableInterface;
use Siganushka\Contracts\Doctrine\EnableTrait;

class FooEnable implements EnableInterface
{
    use EnableTrait;
}
