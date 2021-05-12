<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\Messages;
use App\Models\Message;
use App\Providers\MessageWasReceived;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class MessagesController extends Controller
{
protected $messages;

    function __construct(Messages $messages)
    {
        $this->messages = $messages;
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = $this->messages->getPaginated();

        return view('messages.index', compact('messages'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMessageRequest $request)
    {
        // dd($request);

        $message = $this->messages->store($request);

        event(new MessageWasReceived($message));
        return redirect()->route('home')->with('info', 'Hemos recibido tu mensaje');

        // return redirect()->route('mensajes.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "Este es el mensaje con el id". $id;
        // $message = DB::table('messages')->where('id', $id)->first();

        $message = Cache::tags('messages')->rememberForever("messages.{$id}", function() use ($id) {
            return Message::findOrFail($id);
        });


        return view('messages.show', compact('message'));//
        // , compact('message')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Cache::tags('messages')->rememberForever("messages.{$id}", function() use ($id) {
            return Message::findOrFail($id);
        });

        // $message = DB::table('messages')->where('id', $id)->first();
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMessageRequest $request, $id)
    {
        // $message = DB::table('messages')->where('id', $id)->update([
        //     "nombre" => $request->input('nombre'),
        //     "email" => $request->input('email'),
        //     "mensaje" => $request->input('mensaje'),
        //     "updated_at" => Carbon::now(),
        // ]);
        Message::findOrFail($id)->update($request->validated());
        Cache::tags('messages')->flush();

            return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $message = DB::table('messages')->where('id', $id)->delete();
        Message::findOrFail($id)->delete();
        Cache::tags('messages')->flush();
        return redirect()->route('mensajes.index');

    }
}
