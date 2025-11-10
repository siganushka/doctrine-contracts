<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;

trait EnableTrait
{
    #[ORM\Column]
    protected bool $enabled = true;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }
}
