<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface CreatableInterface
{
    public function getCreatedAt(): ?\DateTimeImmutable;

    public function setCreatedAt(\DateTimeImmutable $createdAt): static;
}
