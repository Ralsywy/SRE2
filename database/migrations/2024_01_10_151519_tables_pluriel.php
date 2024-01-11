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
        Schema::rename('cap_emploi', 'cap_emplois');
        Schema::rename('cma', 'cmas');
        Schema::rename('cv', 'cvs');
        Schema::rename('formation_pro', 'formation_pros');
        Schema::rename('france_travail', 'france_travails');
        Schema::rename('metier_souhaite', 'metier_souhaites');
        Schema::rename('mission_locale', 'mission_locales');
        Schema::rename('plans_action', 'plan_actions');
        Schema::rename('rdv', 'rdvs');
        Schema::rename('reconv_pro', 'reconv_pros');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
