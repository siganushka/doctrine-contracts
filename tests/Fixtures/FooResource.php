<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Fixtures;

use Siganushka\Contracts\Doctrine\ResourceInterface;
use Siganushka\Contracts\Doctrine\ResourceTrait;

class FooResource implements ResourceInterface
{
    use ResourceTrait;
}
