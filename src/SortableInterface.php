<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface SortableInterface
{
    public function getSort(): int;

    public function setSort(int $sort): static;
}
