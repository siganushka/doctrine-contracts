<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait VersionableTrait
{
    /**
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\Version()
     *
     * @Groups({"trait_versionable"})
     */
    private $version;

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }
}
