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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
             $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Lastname');
            $table->string('PerDistrict');
            $table->string('PerStreet');
            $table->string('PerCity');
           $table->string('TampDistrict');
            $table->string('TampStreet');
            $table->string('TampCity');
            $table->Date('Joindate');
            $table->string('Email');
            $table->string('Contact');
            $table->string('Message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
