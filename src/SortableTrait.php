<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait SortableTrait
{
    /**
     * @ORM\Column(type="integer")
     *
     * @Groups({"trait_sortable"})
     */
    private ?int $sorted = null;

    public function getSorted(): ?int
    {
        return $this->sorted;
    }

    public function setSorted(?int $sorted): self
    {
        $this->sorted = $sorted;

        return $this;
    }
}
