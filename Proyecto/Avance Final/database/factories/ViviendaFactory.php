<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ViviendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $nro_identificacion = $this->faker->unique()->word(10);

        return [
            'nro_identificacion' => $nro_identificacion,
            'direccion' => $nro_identificacion,
            'slug' => Str::slug($nro_identificacion)
        ];
    }
}
