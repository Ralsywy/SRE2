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
            $table->foreignId('cap_emploi_id')->constrained('cap_emploi');
            $table->foreignId('cma_id')->constrained('cma');
            $table->foreignId('cv_id')->constrained('cv');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('formation_pro_id')->constrained('formation_pro');
            $table->foreignId('france_travail_id')->constrained('france_travail');
            $table->foreignId('langue_id')->constrained('langues');
            $table->foreignId('metier_souhaite_id')->constrained('metier_souhaite');
            $table->foreignId('mission_locale_id')->constrained('mission_locale');
            $table->foreignId('reconv_pro_id')->constrained('reconv_pro');
            $table->foreignId('reprise_etudes_id')->constrained('reprise_etudes');
            $table->foreignId('soelis_id')->constrained('soelis');
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
