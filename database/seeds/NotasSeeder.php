<?php

use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('_notas')->insert([
        'nota1'=>'7',
        'nota2'=>'5',
          'nota3'=>'9',
          'nota4'=>'9',
          'promedio'=>'9',
          'parcial'=>'9',
            'id_alumno'=>'1',
             'id_curso'=>'1'
    ]);
    }
}
