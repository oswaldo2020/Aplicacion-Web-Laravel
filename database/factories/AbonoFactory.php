<?php

namespace Database\Factories;

use App\Models\Abono;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class AbonoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Abono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'folio' => $this->faker->folio->unique()->number,
            'nombre' => $this->faker->nombre,
            'codigo' => $this->faker->sentence,
            // 'remember_token' => Str::random(10),
        ];
    }
}
