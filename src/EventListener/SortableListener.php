<?php

declare(strict_types=1);

namespace Siganushka\Contracts\Doctrine\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;
use Doctrine\Persistence\ObjectManager;
use Siganushka\Contracts\Doctrine\SortableInterface;

class SortableListener
{
    /**
     * @param LifecycleEventArgs<ObjectManager> $event
     */
    public function prePersist(LifecycleEventArgs $event): void
    {
        $object = $event->getObject();
        if ($object instanceof SortableInterface) {
            $this->setSortIfNotSet($object);
        }
    }

    /**
     * @param LifecycleEventArgs<ObjectManager> $event
     */
    public function preUpdate(LifecycleEventArgs $event): void
    {
        $object = $event->getObject();
        if ($object instanceof SortableInterface) {
            $this->setSortIfNotSet($object);
        }
    }

    private function setSortIfNotSet(SortableInterface $object): void
    {
        if (null === $object->getSort()) {
            $object->setSort(SortableInterface::DEFAULT_SORT);
        }
    }
}
