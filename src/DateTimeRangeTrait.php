<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait DateTimeRangeTrait
{
    /**
     * @ORM\Column(type="datetime")
     *
     * @Groups({"trait_datetime_range"})
     */
    private ?\DateTimeInterface $beginAt = null;

    /**
     * @ORM\Column(type="datetime")
     *
     * @Groups({"trait_datetime_range"})
     */
    private ?\DateTimeInterface $endAt = null;

    public function getBeginAt(): ?\DateTimeInterface
    {
        return $this->beginAt;
    }

    public function setBeginAt(?\DateTimeInterface $beginAt): self
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTimeInterface $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }
}
