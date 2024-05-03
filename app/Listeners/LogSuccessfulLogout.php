<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Carbon;

class LogSuccessfulLogout
{
    /**
     * Handle the event.
     *
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        if ($event->user->role == 'treballador') {
            $event->user->darrera_hora_desortida = Carbon::now();
            $event->user->save();
        }
    }
}
