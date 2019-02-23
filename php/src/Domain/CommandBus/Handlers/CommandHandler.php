<?php


namespace Domain\CommandBus\Handlers;


use Domain\CommandBus\Commands\Command;

abstract class CommandHandler
{
    abstract public function validate();
    abstract public function handel(Command $command);
}