<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Especialidad>
 */
class EspecialidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => str::slug($name),
            'descripcion' => $this->faker->text(255)
        ];
    }
}
