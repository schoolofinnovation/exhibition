<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddDeactiveDateToMagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mags', function (Blueprint $table) {
            $table->date('deactive_date')->default(DB::raw('CURRENT_DATE'));
            $table->date('active_date')->default(DB::raw('CURRENT_DATE'));
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
            $table->dropColumn('deactive_date','active_date');
        });
    }
}
