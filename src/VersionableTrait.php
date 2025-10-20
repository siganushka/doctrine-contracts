<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VersionableTrait
{
    #[ORM\Column(type: Types::INTEGER)]
    #[ORM\Version]
    protected ?int $version = null;

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): static
    {
        $this->version = $version;

        return $this;
    }
}
