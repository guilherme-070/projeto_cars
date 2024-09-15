<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('placa');

            $table->unsignedBigInteger('modelos_id');
            $table->foreign('modelos_id')->references('id')->on('modelos');

            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');

            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors');

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
        Schema::dropIfExists('carros');
    }
}
