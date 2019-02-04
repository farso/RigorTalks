<?php
/**
 * Created by PhpStorm.
 * User: uic
 * Date: 2/4/19
 * Time: 12:50 PM
 */

namespace Blog\Domain\Model\Entities;


use Blog\Domain\Model\Events\PostWasPublished;
use Blog\Domain\TriggerEventsTrait;

class Post
{
    use TriggerEventsTrait;

    private $id;
    private $text;
    private $authorId;
    private $status;

    const POST_STATUS_PUBLISHED = 1;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Post constructor.
     * @param $authorId
     * @param $id
     * @param $text
     */
    public function __construct($authorId, $id, $text)
    {
        $this->authorId = $authorId;
        $this->id = $id;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    public function publish(Author $author): self
    {
        $this->status = self::POST_STATUS_PUBLISHED;
        $this->trigger(
            new PostWasPublished($this->id, $author->getId())
        );

        return $this;
    }


}