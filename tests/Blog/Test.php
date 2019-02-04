<?php
/**
 * Created by PhpStorm.
 * User: uic
 * Date: 2/4/19
 * Time: 12:39 PM
 */


class Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function givenAPostWhenPublishedThenStatusIsPublished()
    {
        $author = new \Blog\Domain\Model\Entities\Author(1,'Israel');
        $post = new \Blog\Domain\Model\Entities\Post($author->getId(),1, 'Best post ever');

        $post->publish($author);

        $this->assertSame(\Blog\Domain\Model\Entities\Post::POST_STATUS_PUBLISHED, $post->getStatus());

        $this->assertSame(1, count($post->getEvents()));
    }
}
