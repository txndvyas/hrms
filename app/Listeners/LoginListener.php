<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\LoginEvent;

use App\Models\LoginHistory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class LoginListener
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
    public function handle(LoginEvent $event)
    {
        // Log the event handling
        Log::info('LoginActivityLogger is handling the event for user: ' . $event->name);

        //store data
        $time = Carbon::now()->toDateTimeString();

        // Log the event to the login_history table
        LoginHistory::create([
            'user_name' => $event->name,
            'user_email' => $event->email,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'created_at' => $time,
            'updated_at' => $time
        ]);

        // Optional: log the event for debugging purposes
        Log::info('Login activity logged for user: ' . $event->name);
    }
}
