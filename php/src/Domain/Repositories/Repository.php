<?php


namespace Domain\Repositories;


abstract class Repository
{
    public function save($object)
    {
        return true;
    }

    public function update($object)
    {
        return true;
    }

    public function delete($object)
    {
        return true;
    }
}