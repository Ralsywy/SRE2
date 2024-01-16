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
        Schema::create('rdcs', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->nullable();
            $table->string('centre')->nullable();
            $table->string('jour')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_rdcs');
    }
};
