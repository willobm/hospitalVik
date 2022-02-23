<?php

namespace Database\Factories;

use App\Models\Profesional;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'fechaInicio' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'activo' => $this->faker->randomElement([1,2]),
            
            'profesional_id' => Profesional::all()->random()->id
        ];
    }
}
