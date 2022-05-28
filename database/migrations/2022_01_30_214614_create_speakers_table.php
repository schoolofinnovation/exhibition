<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->unsignedBigInteger('event_id')->unsigned()->nullable();
            $table->unsignedBigInteger('businessteam_id')->unsigned()->nullable();
            $table->unsignedBigInteger('social_id')->unsigned()->nullable();
            $table->string('website')->nullable();
            $table->string('name')->nullable();
            $table->string('organisation')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();
            $table->boolean('not_website')->default(false);
            $table->boolean('not_active')->default(false);
            $table->boolean('terms')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('businessteam_id')->references('id')->on('businessteams')->onDelete('cascade');
            $table->foreign('social_id')->references('id')->on('socials')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speakers');
    }
}
