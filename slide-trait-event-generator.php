<?php

trait EventGenerator
{
    private $events;

    public function releaseEvents()
    {
        $pendingEvents = $this->events;
        $this->events  = [];

        return $pendingEvents;
    }

    protected function raiseEvent(DomainEvent $event)
    {
        $this->events[] = $event;
    }
}