<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rent_controllers', function (Blueprint $table) {
            $table->id();
            $table->string('RentCar')->nullable();
            $table->string('No_Car')->nullable();
            $table->string('Date_borrow')->nullable();
            $table->string('Date_return')->nullable();
            $table->string('discount')->nullable();
            $table->string('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_controllers');
    }
};
