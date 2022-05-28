<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->string('level')->nullable();
            $table->string('skills')->nullable();
            $table->string('requirement')->nullable();
            $table->string('qualification')->nullable();
            $table->string('department')->nullable();
            $table->string('location_state')->nullable();
            $table->string('location_country')->nullable();
            $table->string('experience')->nullable();
            $table->enum('status', ['active','deactive']);
            $table->enum('type', ['freelancer','full-time','temporary','permanent']);
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
        Schema::dropIfExists('jobs');
    }
}
