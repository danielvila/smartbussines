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
        Schema::create('financial_data', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->unique();
            $table->boolean('credito', false)->nullable();
            $table->string('credito_limite', 0)->nullable();
            $table->string('credito_dias', 0)->nullable();
            $table->boolean('tolerancia', false)->nullable();
            $table->string('tolerancia_dias', 0)->nullable();
            $table->boolean('interes_mora', false)->nullable();
            $table->string('descuento', 0)->nullable();
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
        Schema::dropIfExists('financial_data');
    }
};
