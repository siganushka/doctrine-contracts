<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;

trait VersionableTrait
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Version()
     */
    private ?int $version = null;

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }
}
