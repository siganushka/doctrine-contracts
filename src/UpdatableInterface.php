<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface UpdatableInterface
{
    public function getUpdatedAt(): ?\DateTimeImmutable;

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static;
}
