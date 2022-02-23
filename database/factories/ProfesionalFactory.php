<?php

namespace Database\Factories;

use App\Models\Especialidad;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesional>
 */
class ProfesionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'persona_id' => Persona::all()->random()->id,
            'especialidad_id' => Especialidad::all()->random()->id
        ];
    }
}
