<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\Integer;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'userName' =>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'link' => $faker->url,
        'imageLink' => $faker->imageUrl($width = 640, $height = 480),
        'smallImageUrl' => $faker->imageUrl($width = 100, $height = 100),
        'about'=> Str::random(10),
        'age'=> $faker->numberBetween(10, 70),
        'gender'=> $faker->randomElement(['Male','Female','N/A']),
        'joinedAt'=> $faker->date(),
        'lastActive'=> $faker->date(),
        'followersCounts'=> 0,
        'followingCounts'=> 0,
        'country' => 'Egupt',
        'city'=>'Cairo',
        'ratingAvg'=> $faker->randomFloat(3,0,5),
        'ratingCount'=> $faker->randomDigitNotNull,
    ];
});
