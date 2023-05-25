<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 120);
            $table->string('arrival_station', 120);
            $table->integer('departure_time');
            $table->string('arrival_time', 99);
            $table->string('train_code', 99);
            $table->string('total_carriages', 99);
            $table->string('in_time', 99);
            $table->string('cancelled', 99);
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
        Schema::dropIfExists('trains');
    }
};
