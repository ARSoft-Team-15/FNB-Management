<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use App\Models\UserLog;
use Carbon\Carbon;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  \Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $id = Auth::id();
        $log = UserLog::create([
            'user_id' => $id,
            'login_at' => Carbon::now(),
        ]);
    }
}
