<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait EnableTrait
{
    /**
     * @ORM\Column(type="boolean")
     *
     * @Groups({"trait_enable"})
     */
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
