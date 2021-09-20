<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->sentence(2),
        'fechanacimiento'=>$faker->DateTime,
        'direcion' => $faker->country,
         'genero' => 'masculino',
         'telefono'=> '76453476', //$faker->phoneNumber,
          'email'=>$faker->unique()->safeEmail,
        'clave'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',


    ];
});
