<?php

namespace App\Providers;

use Mail;
use App\Providers\MessageWasReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAutoresponder
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
        $message = $event->message;
        Mail::send('emails.contact',['msg' => $message], function($m) use ($message){
            $m->to($message->email, $message->name)->subject('Tu mensaje fue recibido');
        });
    }
}
