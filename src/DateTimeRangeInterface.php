<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface DateTimeRangeInterface
{
    public function getStartAt(): ?\DateTimeInterface;

    public function setStartAt(?\DateTimeInterface $startAt): static;

    public function getEndAt(): ?\DateTimeInterface;

    public function setEndAt(?\DateTimeInterface $endAt): static;
}
