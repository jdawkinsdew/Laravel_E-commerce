<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title');
            $table->string('slug');
            $table->string('image')->default('product_default.jpg');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('SKU')->nullable();
            $table->integer('price');
            $table->boolean('sale')->default(false);
            $table->integer('origin_price');
            $table->string('source')->nullable();
            $table->integer('stock');
            $table->string('description', 2000)->nullable();
            $table->string('status');
            $table->string('tags')->nullable();
            $table->integer('sold_out')->default(0);
            $table->boolean('newitem')->default(false);
            $table->boolean('special')->default(false);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
}
