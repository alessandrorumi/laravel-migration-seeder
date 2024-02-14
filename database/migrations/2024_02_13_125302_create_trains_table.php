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
            
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->string('train_code')->unique();
            $table->integer('carriages');
            $table->boolean('in-time')->default(true);
            $table->boolean('cancelled')->default(false);

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
