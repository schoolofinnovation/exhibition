<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPartnerIdToBusinessteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('businessteams', function (Blueprint $table) {
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('businessteams', function (Blueprint $table) {
            $table->bigInteger('pavilion_id')->unsigned()->nullable()->after('id');
            $table->foreign('pavilion_id')->references('id')->on('pavillions')->onDelete('cascade');
            
            $table->bigInteger('sponsership_id')->unsigned()->nullable()->after('id');
            $table->foreign('sponsership_id')->references('id')->on('sponserships')->onDelete('cascade');
        });
    }
}
