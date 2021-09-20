<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->string('nombre',45);
             $table->string('apellido',45);
            $table->date('fechanacimiento');
            $table->string('direcion',100);
            $table->string('genero');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->string('clave');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
