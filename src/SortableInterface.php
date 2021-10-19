<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface SortableInterface
{
    public const DEFAULT_SORTED = 0;

    public function getSorted(): ?int;

    public function setSorted(?int $sorted);
}
