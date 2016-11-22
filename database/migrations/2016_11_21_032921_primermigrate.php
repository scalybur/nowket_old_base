<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Primermigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description', 255);
            $table->float('price', 255);

            $table->integer('category_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value', 255);
            $table->timestamps();
        });

        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value', 255);
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src', 255);
            $table->timestamps();
        });

        Schema::create('material_product', function (Blueprint $table) {
            $table->integer('material_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('materials');
        Schema::dropIfExists('images');
        Schema::dropIfExists('material_product');
    }
}
