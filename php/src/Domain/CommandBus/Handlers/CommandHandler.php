<?php


namespace Domain\CommandBus\Handlers;


use Domain\CommandBus\Commands\Command;

abstract class CommandHandler
{
    abstract public function validate(Command $command);
    abstract public function handel(Command $command);
}