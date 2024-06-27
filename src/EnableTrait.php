<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait EnableTrait
{
    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $enabled = null;

    public function isEnabled(): bool
    {
        return (bool) $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
