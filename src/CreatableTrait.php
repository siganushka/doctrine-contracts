<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;

trait CreatableTrait
{
    #[ORM\Column]
    protected ?\DateTimeImmutable $createdAt = null;

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
