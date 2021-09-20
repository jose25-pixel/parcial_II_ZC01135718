<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('_cursos')->insert([
        'nombrecurso'=>'matematicas',
        'año'=>'2020',
          'ciclo'=>'dos',
            'id_profesor'=>'1'


    ]);
    }
}
