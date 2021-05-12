<?php

namespace App\Providers;

use Mail;
use App\Mail\TuMensajeFueRecibido;
use App\Providers\MessageWasReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAutoresponder implements ShouldQueue
{
    /**
     * Create the event listener.
     *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        // dd($event->message);
        $message = $event->message;

        if(auth()->check()){
            $message->nombre  = auth()->user()->name;
            $message->email = auth()->user()->email;
        }
        Mail::to($message->email)->send(new TuMensajeFueRecibido($message));
    }
}
