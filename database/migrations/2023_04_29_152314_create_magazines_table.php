<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->string('subscriber')->nullable();
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('frequency')->nullable();
            $table->enum('status', ['1','0'])->nullable();
            $table->enum('admstatus', ['1','0'])->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->bigInteger('expo_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('expo_id')->references('id')->on('expos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magazines');
    }
}
