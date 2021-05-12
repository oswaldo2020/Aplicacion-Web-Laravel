<?php

namespace App\Repositories;

use App\Http\Requests\CreateMessageRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;





class Messages {

    public function getPaginated()
    {
        $key = "messages.page." . request('page', 1);

        return Cache::tags('messages')->rememberForever($key, function(){
           return Message::with(['user','note','tags'])
            ->orderBy('created_at', request('sorted', 'DESC'))
            ->simplePaginate(10);

       });
    }

    public function store(CreateMessageRequest $request)
    {
        $message = Message::create($request->validated());
        if(auth()->check())
        {
            auth()->user()->messages()->save($message);
        }
        Cache::tags('messages')->flush();

        return $message;

    }


}