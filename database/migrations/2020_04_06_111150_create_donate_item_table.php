<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donateItem', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_category');
            $table->unsignedBigInteger('user_id');
            $table->foreign('product_category')->references('id')->on('type');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('desc');
            $table->integer('quantity');
            $table->string('condition');
            $table->string('image');
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
        Schema::dropIfExists('donateItem');
    }
}
