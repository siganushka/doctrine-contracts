<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;

trait ExpirableTrait
{
    #[ORM\Column(nullable: true)]
    protected ?\DateTimeImmutable $expiredAt = null;

    public function isExpired(): bool
    {
        return $this->expiredAt && new \DateTime() > $this->expiredAt;
    }

    public function getExpiredAt(): ?\DateTimeImmutable
    {
        return $this->expiredAt;
    }

    public function setExpiredAt(?\DateTimeImmutable $expiredAt): static
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }
}
