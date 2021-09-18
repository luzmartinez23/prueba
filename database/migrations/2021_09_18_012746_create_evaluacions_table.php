<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('tema_id');
            $table->unsignedBigInteger('detalle_id');

            $table->text('descripcion');
            $table->date('fecha');
            $table->text('nota_evaluacion');
            $table->foreign('profesor_id')->references('id')->on('usuarios');
            $table->foreign('estudiante_id')->references('id')->on('usuarios');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->foreign('detalle_id')->references('id')->on('detalle_evaluacions');

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
        Schema::dropIfExists('evaluacions');
    }
}
