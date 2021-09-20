<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
         'nombre' => $faker->name,
         'apellido' => $faker->sentence(2),
         'dui'=>'455675-3',
         'telefono'=> '764545476',
          'email' => $faker->unique()->safeEmail,
          'clave'=>'1234',

    ];

});
