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
            $table->unsignedBigInteger('title_id');
            $table->unsignedBigInteger('slug_id');
            $table->unsignedBigInteger('description_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->timestamps();

            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
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
        Schema::dropIfExists('products');
    }
}
