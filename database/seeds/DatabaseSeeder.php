<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('profesor')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');

       DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('alumno')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');


          DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('_cursos')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');


        DB::statement('SET FOREIGN_KEY_CHECKS =0');
     DB::table('_notas')->truncate();
     DB::statement('SET FOREIGN_KEY_CHECKS =1');


         $this->call(ProfesorSeeder::class);
         $this->call(AlumnoSeeder::class);
           $this->call(CursosSeeder::class);
            $this->call(NotasSeeder::class);

    }
}
