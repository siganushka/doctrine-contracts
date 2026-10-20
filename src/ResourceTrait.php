<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

use Doctrine\ORM\Mapping as ORM;

/**
 * @deprecated since siganushka/doctrine-contracts 2.0, define directly within the entity.
 */
trait ResourceTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ['unsigned' => true])]
    protected ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
