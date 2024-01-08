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
        Schema::create('inscrits', function (Blueprint $table) {
            $table->id();
            $table->boolean('statut')->default(true);
            $table->string('dte_contact');
            $table->string('origine_contact');
            $table->boolean('is_rdc')->default(false);
            $table->boolean('is_benevole')->default(false);
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dte_naissance');
            $table->string('nationalite');
            $table->string('adresse');
            $table->int('code_postal');
            $table->string('ville');
            $table->int('telephone');
            $table->string('email');
            $table->string('situation_perso');

            $table->boolean('is_enfant')->default(false);
            $table->int('nb_enfant');

            $table->string('nature_revenus');
            $table->string('autre_revenus');

            $table->boolean('is_soelis')->default(false);
            $table->boolean('is_france_travail')->default(false);
            $table->boolean('is_cma')->default(false);
            $table->boolean('is_mission_locale')->default(false);
            $table->boolean('is_cap_emploi')->default(false);
            $table->boolean('is_cv')->default(false);

            $table->boolean('is_permis')->default(false);
            $table->int('nb_permis');
            $table->boolean('prevu_vehicule')->default(false);

            $table->boolean('is_diplome')->default(false);
            $table->boolean('nb_diplome')->default(false);

            $table->boolean('is_logiciel')->default(false);
            $table->string('logiciel');

            $table->string('emploi_pre_occ');

            $table->boolean('is_reconv_pro')->default(false);

            $table->boolean('is_reprise_etudes')->default(false);

            $table->boolean('is_formation_pro')->default(false);
            
            $table->int('nb_horaire');

            $table->timestamps();
        });

        Schema::create('enfants', function (Blueprint $table) {
            $table->date('dte_naissance');
            $table->string('nom');
            $table->foreignId('inscrit_id')->constrained('inscrits');
            $table->timestamps();
        });

        Schema::create('france_travail', function (Blueprint $table) {
            $table->date('dte_inscription');
            $table->string('nom_ref');
            $table->timestamps();
        });
        Schema::create('soelis', function (Blueprint $table) {
            $table->date('dte_inscription');
            $table->string('nom_ref');
            $table->timestamps();
        });
        Schema::create('cma', function (Blueprint $table) {
            $table->date('dte_inscription');
            $table->string('nom_ref');
            $table->timestamps();
        });
        Schema::create('mission_locale', function (Blueprint $table) {
            $table->date('dte_inscription');
            $table->string('nom_ref');
            $table->timestamps();
        });
        Schema::create('cap_emploi', function (Blueprint $table) {
            $table->date('dte_inscription');
            $table->string('nom_ref');
            $table->timestamps();
        });
        Schema::create('cv', function (Blueprint $table) {
            $table->string('nom');
            $table->string('dte_travailler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscrits');
    }
};
