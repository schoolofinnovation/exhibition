<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagIdToDencosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dencos', function (Blueprint $table) {
            $table->bigInteger('mag_id')->unsigned()->nullable();
            $table->foreign('mag_id')->references('id')->on('mags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dencos', function (Blueprint $table) {
            $table->dropForeign(['mag_id']);
        });
    }
}
