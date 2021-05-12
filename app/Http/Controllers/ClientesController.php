<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\SaveClientesRequest;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ClientesController extends Controller
{
    function __construct()
    {
        $this->middleware('example');
        // ['only' or 'except' => ['home']] });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::with(['Abono'])->get();
        // dd($clientes);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveClientesRequest $request)
    {
        Cliente::create($request->validated());

        return redirect()->route('clientes.index')->with('info', 'El cliente fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('clientes.show', [
            'cliente' => Cliente::findOrFail($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {

        return view('clientes.edit', [
            'cliente' => $cliente
        ]);   //
    }
    // 'roles'
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente, SaveClientesRequest $request)
    {

        $cliente->update($request->validated() );

        return redirect()->route('clientes.show', $cliente)->with('info', 'El cliente fue actualizado con éxito');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {

        $cliente->delete();
        return redirect()->route('clientes.index')->with('info', 'El cliente fue eliminado con exito');

    }

}
