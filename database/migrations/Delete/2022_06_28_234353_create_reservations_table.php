<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
                $table->increments('id');
                $table->string('reservation_code');
                $table->date('date');
                $table->time('time');
                $table->string('booking_status' , "2");
                $table->bigInteger('seats_number');
                $table->enum('special_reservation' ,["1" , "0"]);
                $table->Integer('branch_id')->unsigned();
                $table->Integer('user_id')->unsigned();
                $table->Integer('status_id')->unsigned();
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
        Schema::dropIfExists('reservations');
    }
}
