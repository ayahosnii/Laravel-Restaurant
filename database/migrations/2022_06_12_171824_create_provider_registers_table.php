<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_registers', function (Blueprint $table) {
            // registration data
            $table->increments('id');
            $table->string("name");
            $table->text("description");
            $table->string("email")->unique();
            $table->string("phone")->unique();
            $table->string("password");
            $table->Integer("country_id")->unsigned()->nullable();
            $table->Integer("city_id")->unsigned()->nullable();
            $table->Integer("image_id")->unsigned();
            $table->Integer("category_id")->unsigned();
            $table->string("device_reg_id" ,255);
            //active the account
            $table->enum('phoneactivated', ['0', '1'])->default('0');
            $table->enum('accountactivated', ['0', '1'])->default('0');
            $table->dateTime("activation_date")->nullable();
            $table->Integer("activate_phone_hash")->nullable();
            //subscription
            $table->enum("has_subscriptions", ["1","0"]);
            $table->enum("subscriptions_period", ["1","2"]);
            $table->float("subscriptions_amount")->nullable();
            //order dealing
            $table->decimal('order_app_percentage', 10, 2)->nullable();
            $table->enum("accept_order", ["0","1"]);


            $table->string("longitude")->nullable();
            $table->string("latitude")->nullable();
            $table->string("online_list")->nullable();
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
        Schema::dropIfExists('provider_registers');
    }
}
