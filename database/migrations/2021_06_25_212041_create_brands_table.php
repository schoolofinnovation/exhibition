<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name')->unique();
            $table->string('slug')->nullable();
            $table->string('brand_logo')->nullable();
            $table->string('tag_line')->nullable();
            $table->string('industry')->nullable();
            $table->string('sector')->nullable();
            $table->string('tittle_line')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('long_desc')->nullable();
            $table->string('brand_est_year')->nullable();
            $table->string('about')->nullable();
            $table->string('official_website')->nullable();
            $table->string('business_model')->nullable();
            $table->string('type_business_model')->nullable();
            $table->string('no_of_store')->nullable();
            $table->string('document')->nullable();
            $table->string('brochure')->nullable();
            $table->string('banner')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('brand_identity_video')->nullable();
            $table->string('product_video')->nullable();
            $table->string('user_email')->unique();
            $table->string('user_contact')->unique();
            $table->string('brand_head_name')->nullable();
            $table->string('bh_email')->unique();
            $table->string('bh_contact')->unique();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sprofile_id')->unsigned();
            $table->enum('status', ['active','deactive']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sprofile_id')->references('id')->on('sprofiles')->onDelete('cascade');
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
        Schema::dropIfExists('brands');
    }
}
