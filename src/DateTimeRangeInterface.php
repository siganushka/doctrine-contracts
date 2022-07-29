<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

interface DateTimeRangeInterface
{
    public function getBeginAt(): ?\DateTimeInterface;

    public function setBeginAt(?\DateTimeInterface $beginAt): self;

    public function getEndAt(): ?\DateTimeInterface;

    public function setEndAt(?\DateTimeInterface $endAt): self;
}
