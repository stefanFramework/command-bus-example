<?php

// All you need to do is pass an array mapping your command class names to
// your handler instances. Everything else is already setup.
$commandBus = League\Tactician\Setup\QuickStart::create(
    [
//        AddTaskCommand::class      => $someHandler,
//        CompleteTaskCommand::class => $someOtherHandler
    ]
);
