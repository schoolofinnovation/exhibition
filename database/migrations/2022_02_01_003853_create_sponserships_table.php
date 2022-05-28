<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponserships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->unsignedBigInteger('event_id')->unsigned()->nullable();
            $table->string('plan')->nullable();
            $table->string('slug')->nullable();
            $table->string('auidence')->nullable();
            $table->string('mediacoverage')->nullable();
            $table->string('startdate')->nullable();
            $table->string('enddate')->nullable();
            $table->string('stdcost')->nullable();
            $table->string('extcost')->nullable();
            $table->string('sponsercoverage')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();
            $table->boolean('required_sponser_booklet')->default(false);
            $table->boolean('termsconditions')->default(false);
            $table->boolean('terms')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponserships');
    }
}
