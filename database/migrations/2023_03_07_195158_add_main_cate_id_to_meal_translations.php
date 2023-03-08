<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMainCateIdToMealTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meal_translations', function (Blueprint $table) {
            $table->integer('main_cate_id')->unsigned()->nullable();

            $table->foreign('main_cate_id')->on('main_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meal_translations', function (Blueprint $table) {
            //
        });
    }
}
