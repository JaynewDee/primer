<?php

namespace App\Listeners;

use App\Events\MeepCreated;
use App\Models\User;
use App\Notifications\NewMeep;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMeepCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MeepCreated $event): void
    {
        foreach (User::whereNot('id', $event->meep->user_id)->cursor() as $user) {
            $user->notify(new NewMeep($event->meep));
        }
    }
}
