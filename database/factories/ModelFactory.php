<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    
    return [
        'username' => $faker->unique()->username,
        'owner_id' => '',
        'owner_type' => '',
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Agent::class, function (Faker\Generator $faker) {
    $profile = factory('App\Profile')->create();
    $job = factory('App\Job')->create();

    return [
        'profile_id' => $profile->id,
        'job_id' => $job->id,
        'engaged_since' => Carbon\Carbon::createSafe()
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Room::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->word,
        'max_occupancy' => $faker->numberBetween(1, 5),
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\RoomType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'max_occupancy' => $faker->numberBetween(1, 5),
        'base_price' => '99.00',
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Service::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    $profile = factory('App\Profile')->create();

    return [
        'profile_id' => $profile->id,
        'company' => $faker->company
    ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'phone_number' => $faker->e164PhoneNumber
    ];
});