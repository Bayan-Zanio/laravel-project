<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'user_id'=>$this->factory(\App\User::class),
        'title'=>$this->faker->sentence,
        'excerpt'=>$this->faker->sentence,
        'body'=>$this->faker->paragraph
        ];
    }
}