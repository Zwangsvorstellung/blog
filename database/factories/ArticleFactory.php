<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = $this->faker->randomElement([1,2,3]);

        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->sentence(1),
            'details' => $this->faker->sentence(15),
            'abstract' => $this->faker->sentence(4),
            'category' => $category,
            'urlImg' => 'https://source.unsplash.com/random/500x300',
        ];
    }

}
