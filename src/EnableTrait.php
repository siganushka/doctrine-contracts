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
    private $enabled;

    public function isEnabled(): bool
    {
        return (bool) $this->enabled;
    }

    public function setEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }
}
