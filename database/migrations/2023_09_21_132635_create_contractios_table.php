<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractios', function (Blueprint $table) {
            $table->id();
            $table->string('featureID')->nullable();
            $table->string('owner')->nullable();
            $table->string('organisation')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('GST')->nullable();
            $table->string('industry')->nullable();
            $table->string('product')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('hall')->nullable();
            $table->string('stall')->nullable();
            $table->string('size')->nullable();

            $table->string('booking_status')->nullable();
            $table->enum('checkbox', ['1','0']);

            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();

            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('contractios');
    }
}
