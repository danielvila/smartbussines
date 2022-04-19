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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('type');
            $table->text('description');            
            $table->boolean('exent', false)->nullable();
            $table->boolean('use_packaging', false)->nullable();
            $table->boolean('product_with_lots', false)->nullable();
            $table->boolean('composite_product', false)->nullable();
            $table->boolean('product_with_serials', false)->nullable();
            $table->boolean('use_server', false)->nullable();
            $table->boolean('use_area_transactions', false)->nullable();
            $table->boolean('scale_prices', false)->nullable();
            $table->boolean('product_consignment', false)->nullable();
            $table->boolean('use_scale', false)->nullable();
            $table->boolean('active', false)->nullable();
            $table->boolean('ecommerce', false)->nullable();
            $table->decimal('cost_current', $precision = 8, $scale = 4);
            $table->decimal('cost_average', $precision = 8, $scale = 4);
            $table->decimal('cost_previous', $precision = 8, $scale = 4);
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->unsignedBigInteger('line_id');
            $table->foreign('line_id')->references('id')->on('lines');
            $table->unsignedBigInteger('trademark_id');
            $table->foreign('trademark_id')->references('id')->on('trademarks');
            $table->unsignedBigInteger('itbmssale_id');
            $table->foreign('itbmssale_id')->references('id')->on('itbmssales');
            $table->unsignedBigInteger('itbmsbuy_id');
            $table->foreign('itbmsbuy_id')->references('id')->on('itbmsbuys');
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
        Schema::dropIfExists('products');
    }
};
