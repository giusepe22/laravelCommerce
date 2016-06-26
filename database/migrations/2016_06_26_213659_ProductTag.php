<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tag', function (Blueprint $table) {

            $table->integer('product_id');  //criando campo
            $table->foreign('product_id')->references('id')->on('products');  //referenciando com id da table products
            $table->integer('tag_id');    //criando campo
            $table->foreign('tag_id')->references('id')->on('tags'); //referenciando com id da table products
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_tag');
    }
}
