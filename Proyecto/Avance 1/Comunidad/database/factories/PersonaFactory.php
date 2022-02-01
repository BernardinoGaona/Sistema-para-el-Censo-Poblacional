<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->word(10);

        return [
            'cedula' => $name,
            'names' => $name,
            'direccion' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
