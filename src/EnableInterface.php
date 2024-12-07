<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface EnableInterface
{
    public function isEnabled(): bool;

    public function getEnabled(): bool;

    public function setEnabled(bool $enabled): static;
}
