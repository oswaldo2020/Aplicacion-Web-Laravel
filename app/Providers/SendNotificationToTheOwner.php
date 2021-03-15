<?php

namespace App\Providers;

use Mail;
use App\Providers\MessageWasReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToTheOwner
{
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
            $m->from($message->email, $message->name)
            ->to(oswaldoruben.jw@gmail.com)
            ->subject('Tu mensaje fue recibido');
        });
    }
    }
}
