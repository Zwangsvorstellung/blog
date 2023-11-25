<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $namecategory = $this->faker->randomElement(["Sport","Immobilier","Loisirs"]);
        return [
            'nameCategory' => $namecategory,
            'color' => "black",
        ];
    }

}
