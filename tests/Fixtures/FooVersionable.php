<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Fixtures;

use Siganushka\Contracts\Doctrine\VersionableInterface;
use Siganushka\Contracts\Doctrine\VersionableTrait;

class FooVersionable implements VersionableInterface
{
    use VersionableTrait;
}
