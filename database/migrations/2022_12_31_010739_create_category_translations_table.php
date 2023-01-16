<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned();
            $table->string('locale');
            $table->string('name');
            $table->longText('description');

            $table->unique(['category_id', 'locale']);

            $table->timestamps();
        });
        DB::statement('ALTER TABLE category_translations ADD FULLTEXT(name)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_translations');
    }
}
