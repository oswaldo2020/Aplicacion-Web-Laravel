<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class SearchController extends Controller
{
    public function clientes(Request $request){

        $term = $request->get('term');
        // return $term;
        $querys = Cliente::where('nombre', 'LIKE', '%' . $term . '%')->get();

        $data =[];

        foreach($querys as $query){
            $data[] = [
                'label' => $query->nombre
            ];
        }
        return $data;
    }
}
