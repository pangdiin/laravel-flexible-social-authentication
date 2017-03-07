<?php

namespace App\Listeners\Social;

use Mail;
use App\Mail\Social\FacebookAccountLinked;
use App\Events\Social\FacebookAccountWasLinked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendFacebookLinkedEmail
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
     * @param  GitHubAccountWasLinked  $event
     * @return void
     */
    public function handle(FacebookAccountWasLinked $event)
    {
        Mail::to($event->user)->send(new FacebookAccountLinked($event->user));
    }
}
