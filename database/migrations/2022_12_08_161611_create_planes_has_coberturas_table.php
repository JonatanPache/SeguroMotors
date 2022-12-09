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
        Schema::create('planes__has__coberturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_plan');
            $table->foreign('id_plan')
                ->references('id')
                ->on('planes')->onDelete('cascade');
            $table->bigInteger('id_cobertura');
            $table->foreign('id_cobertura')
                ->references('id')
                ->on('coberturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes__has__coberturas');
    }
};
