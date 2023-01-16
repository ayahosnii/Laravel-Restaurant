<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcategoryMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcategory_meal', function (Blueprint $table) {
            $table->id();
            $table->integer('meal_id')->unsigned();
            $table->integer('mainCate_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('meal_id')->references('id')->on('meals');
            $table->foreign('mainCate_id')->references('id')->on('main_categories');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mcategory_meal');
    }
}
