<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translation_relationships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::table('translations', function (Blueprint $table) {
            $table->foreign('translation_id')->references('id')->on('translation_relationships');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translation_relationships');
        Schema::table('translations', function (Blueprint $table) {
          $table->dropForeign('translations_translation_id_foreign'); 
        });
    }
}
