<?php


namespace Domain\CommandBus\Handlers;


use Domain\CommandBus\Commands\Command;
use Domain\CommandBus\Exceptions\CommandValidationException;
use Domain\CommandBus\Response\CreatePostCommandResponse;
use Domain\Entities\Post;
use Domain\Repositories\PostRepository;

class CreatePostCommandHandler extends CommandHandler
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function validate(Command $command)
    {
        if (empty($command->data) || is_null($command->user)) {
            throw new CommandValidationException('missing-fields');
        }
    }

    public function handel(Command $command)
    {
        $post = new Post();
        $post->content = $command->data;
        $post->user = $command->user;

        $this->postRepository->save($post);

        return $this->buildCommandResponse($post);
    }

    private function buildCommandResponse(Post $post)
    {
        $response = new CreatePostCommandResponse();
        $response->buildPostRecord($post);

        return $response;
    }
}