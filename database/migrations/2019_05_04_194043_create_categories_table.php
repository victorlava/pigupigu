<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('title_id');
            $table->unsignedBigInteger('slug_id');
            $table->unsignedBigInteger('description_id');
            $table->timestamps();

            $table->foreign('title_id')->references('id')->on('translation_relationships');
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
        Schema::dropIfExists('categories');
    }
}
