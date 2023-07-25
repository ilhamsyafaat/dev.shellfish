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
        Schema::create('destinationfoto', function (Blueprint $table) {
            $table->id();
            $table->string('foto_detail');
            $table->unsignedBigInteger('id_destination');
            $table->foreign('id_destination')->references('id')->on('destination')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinationfoto');
    }
};
