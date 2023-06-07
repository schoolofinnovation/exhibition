<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdmstatusToExposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expos', function (Blueprint $table) {
            $table->enum('admstatus', ['1','0'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expos', function (Blueprint $table) {
            $table->enum('admstatus', ['1','0'])->nullable();
        });
    }
}
