<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->char('codEstudiante', 4);
            $table->char('nomEstudiante', 40);
            $table->integer('edaEstudiante');
            $table->date('fechEstudiante');
            $table->char('sexEstudiante', 1);
            $table->char('programa', 2);
            $table->primary('codEstudiante');
            $table->foreign('programa')->references('codPrograma')->on('programas');
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
        Schema::dropIfExists('estudiantes');
    }
};
