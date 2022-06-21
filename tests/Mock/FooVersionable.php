<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Mock;

use Siganushka\Contracts\Doctrine\VersionableInterface;
use Siganushka\Contracts\Doctrine\VersionableTrait;

class FooVersionable implements VersionableInterface
{
    use VersionableTrait;
}
