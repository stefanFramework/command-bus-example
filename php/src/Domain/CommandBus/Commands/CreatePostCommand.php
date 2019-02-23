<?php


namespace Domain\CommandBus\Commands;


class CreatePostCommand extends Command
{
    public $data;
    public $user;
}