<?php

namespace Database\Factories;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->text(255),
            'descripcion' => $this->faker->text(255),
            'status' => $this->faker->text(255),
            'start' => $this->faker->datetime(),
            'end' => $this->faker->datetime(),

            'agenda_id' => Agenda::all()->random()->id
        ];
    }
}
