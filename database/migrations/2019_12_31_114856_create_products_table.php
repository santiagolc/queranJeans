<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('price');
            $table->string('image');
            $table->string('offer');
            $table->integer('sale');
            $table->string('category');
            $table->timestamps();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->timestamps();
            $table->string('status');
        });

        Schema::create('cart_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cart_id');
            $table->integer('product_id');
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
        Schema::dropIfExists('cart_product');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('products');
    }
}
