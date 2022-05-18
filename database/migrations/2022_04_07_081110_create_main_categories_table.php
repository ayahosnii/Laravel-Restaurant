<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('translation_lang',10);
            $table->integer('translate_of')->unsigned();
            $table->string('name', 150)->nullable();
            $table->string('slug', 150)->nullable();
            $table->string('photo', 500)->nullable();
            $table->tinyInteger('active')->comment('0=>inactive 1=>active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_categories');
    }
}
