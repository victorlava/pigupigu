<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('title_id');
            $table->unsignedBigInteger('slug_id');
            $table->unsignedBigInteger('description_id');
            $table->string('website_url');
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('sub_categories');
            $table->foreign('slug_id')->references('id')->on('translation_relationships');
            $table->foreign('description_id')->references('id')->on('translation_relationships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
