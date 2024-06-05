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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('statu');
            $table->date('startDate');
            $table->date('endDate');
            $table->text('mechanicNotes');
            $table->text('clientNotes');
            $table->unsignedBigInteger('mechanicID');
            $table->unsignedBigInteger('vehiculeID');
            $table->timestamps();

            $table->foreign('mechanicID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehiculeID')->references('id')->on('vehicules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparations');
    }
};
