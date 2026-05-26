<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface ExpirableInterface
{
    public function isExpired(): bool;

    public function getExpiredAt(): ?\DateTimeImmutable;

    public function setExpiredAt(?\DateTimeImmutable $expiredAt): static;
}
