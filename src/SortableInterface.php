<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface SortableInterface
{
    public const DEFAULT_SORT = 0;

    public function getSort(): ?int;

    public function setSort(?int $sort): static;
}
