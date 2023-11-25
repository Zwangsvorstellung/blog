<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\User;


class ArticleCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userId' => User::all()->random()->id,
            'valueComment' => $this->faker->sentence(10),
            'articleId' => Article::all()->random()->id,
        ];
    }

}
