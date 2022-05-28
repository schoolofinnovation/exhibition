<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wants', function (Blueprint $table) {
            $table->id();
            $table->string('business')->nullable();
            $table->string('doing')->nullable();
            $table->unsignedBigInteger('service_id')->unsigned()->nullable();
            $table->unsignedBigInteger('sector_id')->unsigned()->nullable();
            $table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->string('pincode')->nullable();
            $table->string('shopstatus')->nullable();
            $table->string('shoptype')->nullable();
            $table->string('area')->nullable();
            $table->string('mininvestment')->nullable();
            $table->string('maxinvestment')->nullable();
            $table->string('level')->nullable();
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
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
        Schema::dropIfExists('wants');
    }
}
