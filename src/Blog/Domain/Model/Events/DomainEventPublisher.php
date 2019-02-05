<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 7:10 PM
 */

namespace Blog\Domain\Model\Events;


class DomainEventPublisher
{
    private $subscribers;
    private static $instance = null;
    private $id = 0;

    /**
     * DomainEventPublisher constructor.
     */
    public function __construct()
    {
        $this->subscribers = [];
    }

    /**
     * @return self
     */
    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    public function __clone()
    {
        throw new \BadMethodCallException('Clone is not supported');
    }

    public function subscriber($aDomainEventSubscriber)
    {
        $id = $this->id;
        $this->subscribers[$id] = $aDomainEventSubscriber;
        $this->id++;

        return $id;
    }

    public function ofId($id)
    {
        return $this->subscribers[$id] ?? null;

    }

    public function unsubscribe($id)
    {
        unset($this->subscribers[$id]);
    }

    public function publish(DomainEventInterface $aDomainEvent)
    {
        foreach ($this->subscribers as $aSubscriber) {
            if ($aSubscriber->isSubscribedTo($aDomainEvent)) {
                $aSubscriber->handle($aDomainEvent);
            }
        }
    }

}