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
        Schema::table('inscrits', function($table) {
            $table->foreignId('cap_emploi_id')->nullable()->change();
            $table->foreignId('cma_id')->nullable()->change();
            $table->foreignId('cv_id')->nullable()->change();
            $table->foreignId('users_id')->nullable()->change();
            $table->foreignId('formation_pro_id')->nullable()->change();
            $table->foreignId('france_travail_id')->nullable()->change();
            $table->foreignId('langue_id')->nullable()->change();
            $table->foreignId('metier_souhaite_id')->nullable()->change();
            $table->foreignId('mission_locale_id')->nullable()->change();
            $table->foreignId('reconv_pro_id')->nullable()->change();
            $table->foreignId('reprise_etudes_id')->nullable()->change();
            $table->foreignId('soelis_id')->nullable()->change();
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
