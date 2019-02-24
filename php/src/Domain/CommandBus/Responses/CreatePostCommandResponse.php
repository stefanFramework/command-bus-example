<?php

namespace Domain\CommandBus\Response;
use Domain\Entities\Post;
use PostRecord;

class CreatePostCommandResponse extends CommandResponse
{
    private $postRecord;

    public function buildPostRecord(Post $post)
    {
        $this->postRecord = new PostRecord();
        $this->postRecord->id = $post->id;
        $this->postRecord->date = $post->date;
        $this->postRecord->content = $post->content;
    }

    public function getPostRecord()
    {
        return $this->postRecord;
    }
}