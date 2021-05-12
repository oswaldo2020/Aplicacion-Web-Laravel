<?php

namespace App\Providers;

use Mail;
use App\Mail\MensajeRecibido;
use App\Providers\MessageWasReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToTheOwner implements ShouldQueue
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

        if(auth()->check()){
            $message->nombre  = auth()->user()->name;
            $message->email = auth()->user()->email;
        }

        Mail::to('osby10@hotmail.com', 'Oswaldo')->send(new MensajeRecibido($message));


        // Mail::send('emails.contact',['msg' => $message], function($m) use ($message){
        //     $m->from($message->email, $message->name)
        //     ->to('osby10@hotmail.com', 'Oswaldo')
        //     ->subject('Tu mensaje fue recibido');
        // });
    }
}
