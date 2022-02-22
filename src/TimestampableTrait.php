<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait TimestampableTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @Groups({"trait_timestampable"})
     */
    private ?\DateTimeInterface $updatedAt = null;

    /**
     * @ORM\Column(type="datetime_immutable")
     *
     * @Groups({"trait_timestampable"})
     */
    private ?\DateTimeImmutable $createdAt = null;

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
