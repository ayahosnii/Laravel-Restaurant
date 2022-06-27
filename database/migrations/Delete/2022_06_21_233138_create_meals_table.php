<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->text("description");
            $table->string("calories");
            $table->integer("category_id")->unsigned();
            $table->integer("branch_id")->unsigned();
            $table->double("price");
            $table->enum("published" , ["1" , "0"]);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
