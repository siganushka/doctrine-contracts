<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;

trait DeletableTrait
{
    #[ORM\Column]
    protected int $deleted = 0;

    public function getDeleted(): int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): static
    {
        $this->deleted = $deleted;

        return $this;
    }
}
