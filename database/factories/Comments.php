<?php
use App\User;
use App\Review;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    $users = \App\User::all()->pluck('id')->toArray();
    $rev = \App\Review::all()->pluck('id')->toArray();
    return [
        'user_id' =>$faker->randomElement($users),
        'resourse_id'=>$faker->randomElement($rev),                  
        'resourse_type'=>0,        
        'body'=>Str::random(20),
    ];
});
