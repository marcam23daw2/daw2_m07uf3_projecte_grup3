<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Carbon;

class LogSuccessfulLogin
{
    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        if ($event->user->role == 'treballador') {
            $event->user->darrera_hora_dentrada = Carbon::now();
            $event->user->save();
        }
    }
}

