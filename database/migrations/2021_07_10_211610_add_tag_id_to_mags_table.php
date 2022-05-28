<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagIdToMagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mags', function (Blueprint $table) {
            $table->bigInteger('cag_id')->unsigned()->nullable()->after('tag');
            $table->foreign('cag_id')->references('id')->on('cags')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mags', function (Blueprint $table) {
            $table->dropForeign(['cag_id']);
        });
    }
}
