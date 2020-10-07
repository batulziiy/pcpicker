<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtStorage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_storage', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('capacity')->nullable();
            $table->string('type')->nullable();
            $table->string('cache')->nullable();
            $table->string('from_factor')->nullable();
            $table->string('interface')->nullable();
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
        Schema::dropIfExists('prt_storage');
    }
}
