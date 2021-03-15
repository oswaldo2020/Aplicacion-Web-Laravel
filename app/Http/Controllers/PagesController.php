<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('example');
    // }
    public function home()
    {
        return view('home');
    }

    public function saludo($nombre = "Invitado")
    {
        $html = "<h2>Contendio html</h2>";
        $script = "<script>alert('Problema XSS')</script>";

        $consolas = [

        "Play Station 4",
        "Xbox One",
        "Wii U"
        ];
        return view('saludo', compact('nombre','html', 'script', 'consolas'));
    }
}
