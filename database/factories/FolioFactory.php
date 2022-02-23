<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Folio>
 */
class FolioFactory extends Factory
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
            'slug' => Str::slug($name),
            'motivo' => $this->faker->text(255),
            'antecPersonales' => $this->faker->text(255),
            'AntcFamiliares' => $this->faker->text(255),
            'Enfermedades' => $this->faker->text(255),
            'Revision' => $this->faker->text(255),
            'Tratamiento' => $this->faker->text(255),

            'persona_id' => Persona::all()->random()->id
        ];
    }
}
