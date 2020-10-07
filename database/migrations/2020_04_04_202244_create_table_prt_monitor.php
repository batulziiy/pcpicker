<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtMonitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_monitor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('screen_size')->nullable();
            $table->string('resolution')->nullable();
            $table->string('refresh_rate')->nullable();
            $table->string('response_time')->nullable();
            $table->string('panel_type')->nullable();
            $table->string('aspect_ratio')->nullable();
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
        Schema::dropIfExists('prt_monitor');
    }
}
