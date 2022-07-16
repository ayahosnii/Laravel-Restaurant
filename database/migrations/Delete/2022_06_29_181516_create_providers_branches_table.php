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
            $table->integer('providers_id');
            $table->integer('branches_id');
            $table->timestamps();

            $table->primary(['providers_id', 'branches_id']);
            $table->foreign('providers_id')->references('id')->on('provider_registers')->onDelete('cascade');
            $table->foreign('branches_id')->references('id')->on('branches')->onDelete('cascade');
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
