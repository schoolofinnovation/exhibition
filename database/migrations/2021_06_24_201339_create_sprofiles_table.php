<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('co_name')->unique();
            $table->string('slug')->nullable();
            $table->string('co_logo')->nullable();
            $table->string('industry')->nullable();
            $table->string('sector')->nullable();
            $table->string('title')->nullable();
            $table->string('about')->nullable();
            $table->string('desc')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('official_email')->unique();
            $table->string('board_contact')->unique();
            $table->string('landline')->unique();
            $table->string('est_year')->nullable();
            $table->string('turnover')->nullable();
            $table->string('off_address')->nullable();
            $table->string('off_city')->nullable();
            $table->string('off_province')->nullable();
            $table->string('off_country')->nullable();
            $table->string('off_zipcode')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('designation')->nullable();
            $table->string('social_link')->nullable();
            $table->string('type_social')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('c_email')->unique();
            $table->string('c_contact')->unique();
            $table->string('business_head_name')->nullable();
            $table->string('bh_email')->unique();
            $table->string('bh_contact')->unique();
            $table->string('sale_head_name')->nullable();
            $table->string('fh_email')->unique();
            $table->string('fh_contact')->unique();
            $table->string('marketing_head_name')->nullable();
            $table->string('mh_email')->unique();
            $table->string('mh_contact')->unique();
            $table->enum('profile_type', ['SLR','ADM','MSR','EMP','USR']);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->enum('status', ['active','deactive']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('sprofiles');
    }
}
