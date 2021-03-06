<?php

namespace App\Listeners\Social;

use Mail;
use App\Mail\Social\GitHubAccountLinked;
use App\Events\Social\GitHubAccountWasLinked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendGitHubLinkedEmail
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
    public function handle(GitHubAccountWasLinked $event)
    {
        Mail::to($event->user)->send(new GitHubAccountLinked($event->user));
    }
}
