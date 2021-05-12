<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAbonosRequest;

class AbonosController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Este es un mensaje de prueba";
        $abonos = Abono::with('cliente')->get();
    //    dd($abonos);
        return view('abonos.index', compact('abonos'));   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abonos = Abono::with('cliente')->get();
        return view('abonos.create', compact('abonos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateAbonosRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAbonosRequest $request)
    {
        // dd('entramos');
       $abono = Abono::create($request->validated());

    //    dd($abono);
       // $cliente = Cliente::create($request->all());

       return redirect()->route('abonos.index')->with('info', 'Abono registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abono = Abono::findOrFail($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
