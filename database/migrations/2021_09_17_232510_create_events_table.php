<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('edition')->nullable();
            $table->string('eventype')->nullable();
            $table->string('eventname')->nullable();
            $table->string('auidence')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('venue')->nullable();
            $table->string('city')->nullable();
            $table->string('organizer')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('level')->nullable();
            $table->string('startdate')->nullable();
            $table->string('enddate')->nullable();
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
