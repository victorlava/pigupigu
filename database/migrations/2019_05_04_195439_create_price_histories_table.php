<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('price_histories', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->float('price');
             $table->unsignedBigInteger('product_id');
             $table->timestamps();

             $table->foreign('product_id')->references('id')->on('products');
         });
     }
      /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('price_histories');
     }
}
