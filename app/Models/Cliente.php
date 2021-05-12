<?php

namespace App\Models;

use App\Models\Abono;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded = [];
    // ['Nombre', 'Edad', 'Sexo', 'Direccion','Estado','Estado_nacimiento','Altura','Peso','Categoria', 'Codigo_cliente'];

    public function abono()
    {
        return $this->hasMany(Abono::class);
        //hasMany : un cliente puede tener varios abonos
    }
}
