<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->enum('type', ['fixed', 'percent'])->default('fixed');
            $table->unsignedInteger('value');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->enum('for', ['general', 'provider', 'branch', 'items'])->default('general');
            $table->unsignedInteger('provider_id')->nullable();
            $table->unsignedInteger('branch_id')->nullable();
            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('provider_registers')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

        });
        Schema::create('coupon_meal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coupon_id');
            $table->unsignedInteger('meal_id');
            $table->timestamps();
        });

        Schema::table('coupon_meal', function (Blueprint $table) {
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon');
    }
}
