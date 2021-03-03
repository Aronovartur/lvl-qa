<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        //create user with questions - laravel 8 style:
//        User::factory()->hasQuestions(50)->create();
//        Answer::factory()->count(50)->create();

        User::factory()->count(rand(1,6))->create()->each(function ($u){
            $u->questions()
                ->saveMany(
                    Question::factory()->count(rand(5,10))->make()
                )
                ->each(function ($q){
                    $q->answers()->saveMany( Answer::factory()->count(rand(5,10))->make());
                });
        });


    }
}
