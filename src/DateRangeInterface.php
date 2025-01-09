<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface DateRangeInterface
{
    public function getStartDate(): ?\DateTimeInterface;

    public function setStartDate(?\DateTimeInterface $startDate): static;

    public function getEndDate(): ?\DateTimeInterface;

    public function setEndDate(?\DateTimeInterface $endDate): static;
}
