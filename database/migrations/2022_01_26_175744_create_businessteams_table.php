<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessteams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->unsignedBigInteger('event_id')->unsigned()->nullable();
            $table->unsignedBigInteger('brand_id')->unsigned()->nullable();
            $table->unsignedBigInteger('franchise_id')->unsigned()->nullable();
            $table->unsignedBigInteger('social_id')->unsigned()->nullable();
            $table->unsignedBigInteger('partner_id')->unsigned()->nullable();
            $table->string('designation')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('channel')->nullable();
            $table->string('website')->nullable();
            $table->boolean('required_website')->default(false);
            $table->string('link')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();
            $table->boolean('not_active')->default(false);
            $table->boolean('terms')->default(false);
            $table->timestamps();
            $table->foreign('social_id')->references('id')->on('socials')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('franchise_id')->references('id')->on('franchises')->onDelete('cascade');
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businessteams');
    }
}
