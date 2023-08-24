<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessCalledosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_calledos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_id')->unsigned()->nullable();
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
            
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          
            $table->string('requirement')->nullable();
            $table->string('comment')->nullable();
            $table->string('type')->nullable();
            $table->string('response')->nullable();
           
            $table->enum('status', ['1','0'])->nullable();
            $table->enum('admstatus', ['1','0'])->nullable();
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
        Schema::dropIfExists('business_calledos');
    }
}
