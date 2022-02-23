<?php

namespace Database\Factories;

use App\Models\Folio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receta>
 */
class RecetaFactory extends Factory
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
            'medicamento' => $this->faker->text(10),
            'dosis' => $this->faker->text(10),
            'periodo' => $this->faker->text(10),

            'folio_id' => Folio::all()->random()->id
        ];
    }
}
