<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Siganushka\Contracts\Doctrine\TimestampableInterface;

class TimestampableListener
{
    public function prePersist(LifecycleEventArgs $event): void
    {
        $object = $event->getObject();
        if ($object instanceof TimestampableInterface) {
            $object->setCreatedAt(new \DateTimeImmutable());
        }
    }

    public function preUpdate(LifecycleEventArgs $event): void
    {
        $object = $event->getObject();
        if ($object instanceof TimestampableInterface) {
            $object->setUpdatedAt(new \DateTime());
        }
    }
}
