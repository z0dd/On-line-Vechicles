<?php

use Faker\Generator as Faker;
use App\Mechanic;

$factory->define(Mechanic::class, function (Faker $faker) {
	$name = explode(" ", $faker->name);
    return [
    	'grade' => 1,
    	'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
