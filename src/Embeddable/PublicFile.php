<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Embeddable
 */
class PublicFile
{
    /**
     * @ORM\Column(type="string")
     *
     * @Groups({"embeddable_public_file"})
     */
    private ?string $url = null;

    public function __construct(string $url = null)
    {
        $this->url = $url;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function __toString(): string
    {
        return (string) $this->url;
    }
}
