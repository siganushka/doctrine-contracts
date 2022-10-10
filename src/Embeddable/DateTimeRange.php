<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Embeddable
 */
class DateTimeRange
{
    /**
     * @ORM\Column(type="datetime")
     *
     * @Groups({"embeddable_datetime_range"})
     */
    private ?\DateTimeInterface $beginAt = null;

    /**
     * @ORM\Column(type="datetime")
     *
     * @Groups({"embeddable_datetime_range"})
     */
    private ?\DateTimeInterface $endAt = null;

    public function __construct(\DateTimeInterface $beginAt = null, \DateTimeInterface $endAt = null)
    {
        $this->beginAt = $beginAt;
        $this->endAt = $endAt;
    }

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
