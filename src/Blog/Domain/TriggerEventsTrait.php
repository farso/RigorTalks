<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 1:21 PM
 */

namespace Blog\Domain;


trait TriggerEventsTrait
{
    private $events = [];

    protected function trigger($event)
    {
        $this->events[] = $event;
    }

    public function getEvents()
    {
        return $this->events;
    }
}