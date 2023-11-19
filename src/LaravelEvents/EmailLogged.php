<?php

namespace Yhw\LaravelEmailDatabaseLog\LaravelEvents;

use Illuminate\Queue\SerializesModels;
use Yhw\LaravelEmailDatabaseLog\EmailLog;

class EmailLogged
{
	use SerializesModels;
	
    public $emailLog;

    /**
     * Create a new event instance.
     *
     * @param  Yhw\LaravelEmailDatabaseLog\EmailLog  $emailLog
     * @return void
     */
    public function __construct(EmailLog $emailLog)
    {
        $this->emailLog = $emailLog;
    }
}