<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 11:37 AM
 */

namespace Blog\Application\Commands;


class PublishCommand
{
    private $authorId;
    private $postId;


    /**
     * PublishCommand constructor.
     * @param $authorId
     * @param $postId
     */
    public function __construct($authorId, $postId)
    {
        $this->authorId = $authorId;
        $this->postId = $postId;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->postId;
    }


}