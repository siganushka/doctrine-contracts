<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface DeletableInterface
{
    public function getDeletedAt(): ?\DateTimeImmutable;

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): static;
}
