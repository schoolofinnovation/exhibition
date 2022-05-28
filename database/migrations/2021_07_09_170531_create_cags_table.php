<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cags', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('slug')->nullable();
            $table->string('desc')->nullable();
            $table->string('tag')->nullable();
            $table->string('c_desc')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->enum('status', ['1','0'])->nullable();
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
        Schema::dropIfExists('cags');
    }
}
