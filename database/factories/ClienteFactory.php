<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellido_paterno' => $this->faker->lastname,
            'apellido_materno' => $this->faker->lastname,
            'email' => $this->faker->email,
            'edad' => $this->faker->age,
            'sexo' => $this->faker->sex,
            'direccion' => $this->faker->address,
            'estado' => $this->faker->,
            'estado_nacimiento' => $this->faker->,
            'altura' => $this->faker->,
            'peso' => $this->faker->,
            'categoria' => $this->faker->,
            'codigo_cliente' => $this->faker->
            //
        ];
    }
}
