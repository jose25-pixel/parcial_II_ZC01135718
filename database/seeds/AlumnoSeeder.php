<?php

use Illuminate\Database\Seeder;
use App\Alumno;
use faker\Factory;//
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('alumno')->insert([
       'nombre'=>'Oscar',
       'apellido'=>'castellano',
       'fechanacimiento'=>\Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
       'direcion'=>'avenidad masferrer ',
       'genero'=>'masculino',
       'telefono'=> '7683456',
        'email'=>'oscar@gmail.com',
        'clave'=>'34554'

      ]);
   DB::insert('INSERT INTO alumno(nombre,apellido,fechanacimiento, direcion, genero, telefono, email, clave) VALUES(?,?,?,?,?,?,?,?)',['Susana','venites','1999-08-26','la calle vieja','femenino','78873827','susuana@gmail.com','3664774']);


/*-------usando el modelo para insertar datos mediante---------*/

   Alumno::create([
       'nombre'=>'Manuel',
       'apellido'=>'perez',
       'fechanacimiento'=>\Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
       'direcion'=>'avenidad castaneda ',
       'genero'=>'masculin',
       'telefono'=> '76834543',
        'email'=>'manuel@gmail.com',
        'clave'=>'34554'

      ]);
    factory(Alumno::class,18)->create();//usando factory
    }
}
