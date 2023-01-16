<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerServiceChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('customer_service_chats', function (Blueprint $table) {
           $table->id();
           $table->uuid('uuid')->constrained()->caseCadeOnDelete();
           $table->bigInteger('user_id')->unsigned();
           $table->timestamp('last_message_at')->nullable();
           $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_service_chat');
    }
}
