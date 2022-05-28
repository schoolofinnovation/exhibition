<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExhibitorsToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('exhibitors')->nullable();
            $table->string('country')->nullable();
            
            $table->unsignedBigInteger('sector_id')->unsigned()->nullable();
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');

            $table->unsignedBigInteger('expo_id')->unsigned()->nullable();
            $table->foreign('expo_id')->references('id')->on('expos')->onDelete('cascade');
            
            $table->unsignedBigInteger('search_id')->unsigned()->nullable();
            $table->foreign('search_id')->references('id')->on('expos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['expo_id']);
            $table->dropForeign(['sector_id']);
            $table->dropForeign(['search_id']);
            $table->dropColumn('exhibitors');
            $table->dropColumn('country');
        });
    }
}
