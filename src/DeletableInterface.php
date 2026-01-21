<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface DeletableInterface
{
    public function getDeleted(): int;

    public function setDeleted(int $deleted): static;

    #[\Deprecated]
    public function getDeletedAt(): ?\DateTimeImmutable;

    #[\Deprecated]
    public function setDeletedAt(?\DateTimeImmutable $deletedAt): static;
}
