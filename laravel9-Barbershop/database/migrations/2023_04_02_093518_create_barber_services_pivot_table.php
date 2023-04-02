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
        /* Pivot table */
        Schema::create('barber_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barber_id');
            $table->unsignedBigInteger('services_id');

            $table->foreign('barber_id')->references('id')->on('barbers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('services_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('barber_services');
    }
};
