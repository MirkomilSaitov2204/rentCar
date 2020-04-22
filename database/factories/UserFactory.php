<?php

use App\Car;
use App\Reservation;
use App\Role;
use App\RoleUser;
use App\Scooter;
use App\User;
use App\Vehicle;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'dob' => $faker->date(),
        'passpost_number' => $faker->numberBetween($min = 123456798 , $max = 987654321),
        'address'=> $faker->address,
        'phone'=> $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'role_id' => $faker->numberBetween($min = 1 , $max = 2),
        'user_id' => $faker->numberBetween($min = 1 , $max = 50),
    ];
});




$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween($min = 1000, $max = 1000),
        'old_price' => $faker->numberBetween($min = 1000, $max = 1000),
        'description' => $faker->paragraph(),
        'quantity' => $faker->numberBetween($min = 10, $max =20 ),
        'vehicle_id' => $faker->numberBetween($min = 1, $max = 2),
    ];
});


$factory->define(Scooter::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween($min = 1000, $max = 1000),
        'old_price' => $faker->numberBetween($min = 1000, $max = 1000),
        'description' => $faker->paragraph(),
        'quantity' => $faker->numberBetween($min = 10, $max =20 ),
        'vehicle_id' => $faker->numberBetween($min = 1, $max = 2),
    ];
});


$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'balance' => $faker->numberBetween($min = 1000, $max = 1000),
        'distance' => $faker->numberBetween($min = 1000, $max = 1000),
        'time' => $faker->date(),
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});
