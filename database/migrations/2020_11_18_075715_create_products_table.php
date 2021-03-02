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
            $table->id();
            $table->string('name');
            $table->bigInteger('price');
            $table->bigInteger('quanty');
            $table->bigInteger('sale')->default(0);
            $table->longText('description')->nullable();
            $table->string('product_code');
            $table->integer('sold')->default(0);
            $table->integer('hot_deal')->default();
            $table->longText('image')->nullable();
            $table->bigInteger('status')->default(1);
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
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
}
