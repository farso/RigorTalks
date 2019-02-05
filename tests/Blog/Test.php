<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 12:39 PM
 */

use Blog\Domain\Model\Events\DomainEventPublisher;
use PHPUnit\Framework\TestCase;
use Blog\Domain\Model\Entities\Post;
use Blog\Domain\TriggerEventsTrait;

class DomainEventAllListener
{
    use TriggerEventsTrait;

    public function handle ($domainEvent)
    {
        $this->trigger($domainEvent);
    }

    public function isSubscribedTo()
    {
        return true;
    }

}

class Test extends TestCase
{
    private $listenerId;

    protected function setUp()
    {
        $this->listenerId = DomainEventPublisher::instance()->subscriber(
            new DomainEventAllListener()
        );
    }

    /**
     * @test
     */
    public function givenAPostWhenPublishedThenStatusIsPublished()
    {
        $author = new \Blog\Domain\Model\Entities\Author(1,'Israel');
        $post = new \Blog\Domain\Model\Entities\Post($author->getId(),1, 'Best post ever');

        $post->publish($author);

        $this->assertSame(Post::POST_STATUS_PUBLISHED, $post->getStatus());

        //$this->assertSame(1, count($post->getEvents()));
        
        $this->assertSame(
            1,
            count(DomainEventPublisher::instance()->ofId($this->listenerId)->getEvents())
        );
    }
}
