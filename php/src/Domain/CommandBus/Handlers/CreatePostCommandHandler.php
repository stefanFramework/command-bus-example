<?php


namespace Domain\CommandBus\Handlers;


use Domain\CommandBus\Commands\Command;
use Domain\Entities\Post;
use Domain\Repositories\PostRepository;

class CreatePostCommandHandler extends CommandHandler
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }

    public function handel(Command $command)
    {
        $post = new Post();
        $post->content = $command->data;

        $this->postRepository->save($post);

        return $post; // TODO: Create CommandResponse + Record ?????
    }
}