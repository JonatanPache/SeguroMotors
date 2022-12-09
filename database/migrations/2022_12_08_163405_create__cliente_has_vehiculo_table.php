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
        Schema::create('cliente_has_vehiculo', function (Blueprint $table) {
            $table->string('id_cliente')->contrained()->cascadeOnDelete();
            $table->string('id_vehiculo')->contrained()->cascadeOnDelete();
            $table->string('placa');
            $table->string('km');
            $table->string('valor_comercial');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('id_cuidad')->contrained()->cascadeOnDelete();
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
        Schema::dropIfExists('cliente_has_vehiculo');
    }
};
