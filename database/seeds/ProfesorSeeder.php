<?php

use Illuminate\Database\Seeder;
use faker\Factory;
use App\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('profesor')->insert([
       'nombre'=>'cruz',
       'apellido'=>'lopez',
       'dui'=>'455675-3',
       'telefono'=>'77894534',
       'email'=>'lopez@gmail.com',
       'clave'=> '3456677'
      ]);

      //usando consultas pdo
       DB::insert('INSERT INTO profesor(nombre,apellido,dui, telefono, email, clave) VALUES(?,?,?,?,?,?)',['Pedro','lopez','3577368-3','78873827','pedro@gmail.com','36645674']);


factory(Profesor::class,18)->create();//usando los factory

    }
}
