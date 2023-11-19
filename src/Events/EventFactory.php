<?php

namespace Yhw\LaravelEmailDatabaseLog\Events;
use Yhw\LaravelEmailDatabaseLog\Events\MailgunEvent;

class EventFactory
{
    public static function create($type)
    {
    	if($type == 'mailgun')
	        return new MailgunEvent();

	    return false;
    }
}