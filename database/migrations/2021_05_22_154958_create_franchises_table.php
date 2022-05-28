<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->string('Co_name');
            $table->string('brand_name');
            $table->string('min_investment');
            $table->string('max_investment');
            $table->string('min_area');
            $table->string('max_area');
            $table->dateTime('year');
            $table->string('max_outlet');
            $table->string('min_outlet');
            $table->string('total_no_outlet');
            $table->enum('location', ['east','west','north','south','central']);
            $table->string('state');
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->string('email')->unique();
            $table->string('contact')->unique();
            $table->enum('property_type', ['commercial','nonCommercial']);
            $table->enum('featured', ['low','high','medium','non-featured','featured','new','premium','demand']);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->string('brand_image')->nullable();
            $table->text('brand_images')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->enum('status', ['active','deactive']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchises');
    }
}
