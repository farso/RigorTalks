<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 11:28 PM
 */

namespace Blog\Domain\Model\Events;


interface DomainEventInterface
{
    public function occurredOn();
}