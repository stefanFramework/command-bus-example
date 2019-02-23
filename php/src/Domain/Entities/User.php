<?php


namespace Domain\Entities;


class User
{
    public $id;
    public $userName;
    public $name;
    public $email;
    public $posts;

    public function __construct()
    {
        $this->posts = [];
    }
}