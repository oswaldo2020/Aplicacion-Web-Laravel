<?php

namespace App\Models;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{

    // public function getRouteKeyName()
    // {
    //     return 'folio';
    // }
    protected $guarded =[];
    // ['folio','nombre','codigo','ultimo_saldo', 'credito_original', 'ultimo_abono'];
    // ['Nombre', 'Edad', 'Sexo', 'Direccion','Estado','Estado de nacimiento','Altura','Peso','Categoria', 'Codigo del cliente'];
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
