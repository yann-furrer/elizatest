<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Meal::class, static function (Faker\Generator $faker) {
    return [
        'meal_name' => $faker->sentence,
        'vegan' => $faker->randomNumber(5),
        'time' => $faker->sentence,
        'url' => $faker->sentence,
        'img' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Ingredient::class, static function (Faker\Generator $faker) {
    return [
        'id_meal' => $faker->randomNumber(5),
        'ing1' => $faker->sentence,
        'ing2' => $faker->sentence,
        'ing3' => $faker->sentence,
        'ing4' => $faker->sentence,
        'ing5' => $faker->sentence,
        'ing6' => $faker->sentence,
        'ing7' => $faker->sentence,
        'ing8' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
