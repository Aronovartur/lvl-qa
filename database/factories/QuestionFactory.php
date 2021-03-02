<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'title' => rtrim($this->faker->sentences(rand(1,3),true)),
            'body' =>$this->faker->paragraphs(rand(3,7), true),
            'answers_count'=>rand(0,10),
            'votes'=>rand(-3,10)
        ];
    }
}
