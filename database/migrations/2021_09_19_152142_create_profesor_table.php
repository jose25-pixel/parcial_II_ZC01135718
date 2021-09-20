<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->increments('id_profesor');
            $table->string('nombre',45);
             $table->string('apellido',45);
             $table->string('dui');
             $table->integer('telefono');
             $table->string('email',100);
             $table->string('clave',8);


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
        Schema::dropIfExists('_profesor');
    }
}
