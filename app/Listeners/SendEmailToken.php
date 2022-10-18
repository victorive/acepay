<?php

namespace App\Listeners;

use App\Events\UserLogin;
use App\Mail\TwoFactorAuthentication;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailToken
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
     * @param  object  $event
     * @return void
     */
    public function handle(UserLogin $event)
    {
        Mail::to($event->user->email)->send(new TwoFactorAuthentication($event->user));
    }
}
