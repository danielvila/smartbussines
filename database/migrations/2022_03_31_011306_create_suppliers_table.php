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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('tipo');
            $table->string('name');
            $table->string('ruc');
            $table->string('dv')->nullable();
            $table->string('type_supplier');
            $table->string('representante')->nullable();
            $table->string('direcction1');
            $table->string('direcction2')->nullable();
            $table->string('pais')->nullable();
            $table->string('estado')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->boolean('activo', false);
            $table->string('email')->unique()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('suppliers');
    }
};
