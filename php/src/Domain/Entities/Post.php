<?php


namespace Domain\Entities;

use Carbon\Carbon;

class Post
{
    public $id;
    public $date;
    public $content;

    public function __construct()
    {
        $this->id = rand(1, 4000);
        $this->date = Carbon::now();
    }
}