<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('package')->unique();
            $table->string('desc')->nullable();
            $table->string('type');
            $table->decimal('price');
            $table->decimal('saleprice')->nullable();
            $table->decimal('cart_value');
            $table->date('expiry_date')->default(DB::raw('CURRENT_DATE'));
            $table->date('start_date')->default(DB::raw('CURRENT_DATE'));
            $table->time('start_time')->default(DB::raw('CURRENT_DATE'));
            $table->time('expiry_time')->default(DB::raw('CURRENT_DATE'));
            $table->date('validity')->default(DB::raw('CURRENT_DATE'));
            $table->date('number')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->enum('terms',['1','0'])->default(0);
            $table->enum('status', ['1','0'])->nullable();
            $table->enum('admstatus', ['1','0'])->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
