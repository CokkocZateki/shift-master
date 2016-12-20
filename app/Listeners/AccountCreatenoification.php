<?php

namespace App\Listeners;

use App\Events\AccountCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountCreatenoification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AccountCreateEvent  $event
     * @return void
     */
    public function handle(AccountCreateEvent $event)
    {
        //
    }
}
