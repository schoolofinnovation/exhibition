<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEventIdToDencosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dencos', function (Blueprint $table) {
            $table->bigInteger('pavillion_id')->unsigned()->nullable()->after('expo_id');;
            $table->foreign('pavillion_id')->references('id')->on('pavillions')->onDelete('cascade');
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
            $table->dropForeign(['pavillion_id']);
        });
    }
}
