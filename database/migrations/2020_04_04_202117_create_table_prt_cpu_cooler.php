<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtCpuCooler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_cpu_cooler', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('fan_rpm')->nullable();
            $table->string('noise_level')->nullable();
            $table->string('color')->nullable();
            $table->string('radiator_size')->nullable();
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
        Schema::dropIfExists('prt_cpu_cooler');
    }
}
