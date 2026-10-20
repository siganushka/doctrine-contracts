<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine;

/**
 * @deprecated since siganushka/doctrine-contracts 2.0, define directly within the entity.
 */
interface ResourceInterface
{
    public function getId(): ?int;
}
