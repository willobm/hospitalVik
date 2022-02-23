<?php

namespace Database\Factories;

use App\Models\Folio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Signo>
 */
class SignoFactory extends Factory
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
            'valor' => $this->faker->text(10),
            'unidad' => $this->faker->text(10),
            'fechat' => $this->faker->date(),

            'folio_id' => Folio::all()->random()->id
        ];
    }
}
