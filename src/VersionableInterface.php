<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface VersionableInterface
{
    public function getVersion(): ?int;

    public function setVersion(?int $version): static;
}
