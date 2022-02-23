<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
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
            'cedula' => $this->faker->text(10),
            'telefono' => $this->faker->text(10),
            'direccion' => $this->faker->text(255),
            'ciudad' => $this->faker->text(50),
            'fechanac' => $this->faker->date(),
            'genero' => $this->faker->text(15),
            'estadocivil' => $this->faker->text(15),
            
            'user_id' => User::all()->random()->id
        ];
    }
}
