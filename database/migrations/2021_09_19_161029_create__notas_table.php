<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_notas', function (Blueprint $table) {
            $table->increments('id_notas');
            $table->integer('nota1');
            $table->integer('nota2');
            $table->integer('nota3');
            $table->integer('nota4');
            $table->integer('promedio');
            $table->integer('parcial');

            $table->unsignedInteger('id_alumno')->nullable();
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno');
             $table->unsignedInteger('id_curso')->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('_cursos');
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
        Schema::dropIfExists('_notas');
    }
}
