<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentIdToSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub-categories', function (Blueprint $table) {
            
            $table->string('desc')->nullable()->after('id');
            $table->string('image')->nullable()->after('id');
            $table->string('parent_id')->nullable()->after('id');
            //$table->string('category_id')->nullable()->after('id');
            $table->string('count')->nullable()->after('id');
            $table->string('sector')->nullable()->after('id');
            $table->string('slug')->nullable()->after('id');
            $table->enum('status', ['1','0'])->nullable()->after('id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub-categories', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('sector');
            $table->dropColumn('desc');
            $table->dropColumn('count');
            $table->dropColumn('image');
            $table->dropColumn('status');
            
            $table->dropColumn('parent_id');
        });
    }
}
