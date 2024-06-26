<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface TimestampableInterface
{
    public function getUpdatedAt(): ?\DateTimeInterface;

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static;

    public function getCreatedAt(): ?\DateTimeImmutable;

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static;
}
