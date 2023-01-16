<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('providers_id')->unsigned();
            $table->integer('branches_id')->unsigned();
            $table->timestamps();

            $table->foreign('providers_id')->references('id')->on('provider_registers');
            $table->foreign('branches_id')->references('id')->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers_branches');
    }
}
