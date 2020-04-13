<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donateMoney', function (Blueprint $table) {
            $table->bigIncrements('donate_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('donation_type',500)->nullable();
            $table->string('donation_for',500)->nullable();
            $table->integer('donation_amount');
            $table->string('card_name',500)->nullable();
            $table->integer('card_number');
            $table->string('expire_year',500);
            $table->integer('cvv')->unique();

            
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
        Schema::dropIfExists('donateMoney');
    }
}
