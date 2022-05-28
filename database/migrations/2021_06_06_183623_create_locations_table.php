<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatelocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['1','0'])->nullable();
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('city')->nullable();
            $table->string('tier')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('zone')->nullable();
            $table->string('state')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
