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
        Schema::create('products', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('price');
            $table->text('description');
            $table->string('category');
            $table->string('color')->default('not_defined');
            $table->string('size')->default('not_defined');
            $table->string('product_image');
            $table->boolean('in_sale');
            $table->
        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products')
    }
};
