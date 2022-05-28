<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('event_id')->unsigned()->nullable();
            //$table->bigInteger('sponsership_id')->unsigned()->nullable();
            $table->bigInteger('social_id')->unsigned()->nullable();
            $table->string('website')->nullable();
            $table->string('dacontact')->nullable();
            $table->string('daname')->nullable();
            $table->string('daemail')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();
            $table->boolean('terms')->default(false);
            $table->timestamps();
            $table->foreign('social_id')->references('id')->on('socials')->onDelete('cascade');
            //$table->foreign('sponsership_id')->references('id')->on('sponserships')->onDelete('cascade');
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
        Schema::dropIfExists('partners');
    }
}
