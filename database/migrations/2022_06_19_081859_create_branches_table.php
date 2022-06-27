<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('delivery_price', 10, 2);
            $table->string("name");
            $table->string('phone');
            $table->string('work_hours');
            $table->string("ar_address");
            $table->string("en_address");
            $table->string('ar_details');
            $table->string('en_details');
            $table->string("longitude")->nullable();
            $table->string("latitude")->nullable();
            $table->string('director_password');
            $table->enum('active' ,["1" , "0"])->default('1');
            $table->Integer('category_id')->unsigned();
            $table->Integer('provider_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('main_categories')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('provider_registers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
