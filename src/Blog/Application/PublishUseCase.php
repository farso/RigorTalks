<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 11:33 AM
 */

namespace Blog\Application;


use Blog\Application\Commands\PublishCommand;
use Blog\Domain\Model\PostRepository;
use Blog\Domain\Model\UserRepository;

class PublishUseCase
{
    private $postRepository;
    private $userRepository;

    public function __construct(
        PostRepository $postRepository,
        UserRepository $userRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->userRepository = $userRepository;
    }

    public function handle(PublishCommand $command)
    {
        $post = $this->postRepository->ofIdOrFail($command->getPostId());
        $user = $this->userRepository->ofIdOrFail($command->getAuthorId());

        $post->publish($user);

        return $post;

    }

}