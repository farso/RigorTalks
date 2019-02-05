<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 12:14 PM
 */

namespace Blog\Domain\Model\Events;


class PostWasPublished implements DomainEventInterface
{
    private $postId;
    private $authorId;
    private $occurredOn;

    /**
     * PostWasPublished constructor.
     * @param $postId
     * @param $authorId
     * @throws \Exception
     */
    public function __construct($postId, $authorId)
    {
        $this->postId = $postId;
        $this->authorId = $authorId;
        $this->occurredOn = (new \DateTimeImmutable())->getTimestamp();
    }

    public function occurredOn()
    {
        return $this->occurredOn;
    }

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }


}