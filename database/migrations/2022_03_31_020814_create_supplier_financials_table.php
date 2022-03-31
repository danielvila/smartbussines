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
        Schema::create('supplier_financials', function (Blueprint $table) {
            $table->id();
            $table->string('type_retencion');
            $table->boolean('retencion', false)->nullable();
            $table->string('retencion_iva', 0)->nullable();
            $table->string('credito_dias', 0)->nullable();
            $table->string('observaciones', 0)->nullable();
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
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
        Schema::dropIfExists('supplier_financials');
    }
};
