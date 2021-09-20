<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_cursos', function (Blueprint $table) {
              $table->increments('id_curso');
            $table->string('nombrecurso',45);
             $table->year('año');
            $table->string('ciclo');
            $table->unsignedInteger('id_profesor')->nullable();
            $table->foreign('id_profesor')->references('id_profesor')->on('profesor');
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
        Schema::dropIfExists('_cursos');
    }
}
