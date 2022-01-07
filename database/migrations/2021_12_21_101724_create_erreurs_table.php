<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erreurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->integer('nombre_erreur');
            $table->integer('matricule');
            $table->foreign('matricule')->references('matricule')->on('collecteurs');
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
        Schema::dropIfExists('erreurs');
    }
}
