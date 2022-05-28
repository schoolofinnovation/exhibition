<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mags', function (Blueprint $table) {
            $table->id();
            $table->string('tittle')->nullable();
            $table->string('slug')->nullable();
            $table->string('desc')->nullable();
            $table->string('tag')->nullable();
            $table->string('s_desc')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['1','0'])->nullable();
            $table->enum('type', ['a','b','c','d','e','f'])->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('mags');
    }
}
