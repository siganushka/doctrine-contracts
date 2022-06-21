<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Tests\Mock;

use Siganushka\Contracts\Doctrine\ResourceInterface;
use Siganushka\Contracts\Doctrine\ResourceTrait;

class FooResource implements ResourceInterface
{
    use ResourceTrait;

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
