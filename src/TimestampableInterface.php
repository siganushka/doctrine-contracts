<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface TimestampableInterface extends CreatableInterface
{
    public function getUpdatedAt(): ?\DateTimeInterface;

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static;
}
