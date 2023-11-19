<?php

namespace Yhw\LaravelEmailDatabaseLog\Events;

use Yhw\LaravelEmailDatabaseLog\EmailLog;
use Yhw\LaravelEmailDatabaseLog\Events\Interfaces\EventInterface;

abstract class Event implements EventInterface
{
    public function getEmail($messageId)
    {
        return EmailLog::select('id', 'messageId')
            ->where('messageId', $messageId)
            ->first();
    }
}