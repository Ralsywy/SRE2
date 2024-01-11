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
        Schema::table('cap_emplois', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('cmas', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('cvs', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('formation_pros', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('france_travails', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('langues', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('metier_souhaites', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('mission_locales', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('reconv_pros', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('reprise_etudes', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
        Schema::table('soelis', function($table) {
            $table->foreignId('inscrit_id')->constrained('inscrits')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
