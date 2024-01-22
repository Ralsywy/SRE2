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
            $table->date('dte_contact')->nullable();
            $table->string('origine_contact')->nullable();
            $table->boolean('is_rdc')->default(false);
            $table->boolean('is_benevole')->default(false);
            $table->string('civilite')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->date('dte_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('situation_perso')->nullable();

            $table->boolean('is_demande_asile')->default(false);
            $table->boolean('is_refugie_politique')->default(false);
            $table->date('dte_arrivee_fr')->nullable();

            $table->boolean('is_enfant')->default(false);
            $table->integer('nb_enfant')->nullable();

            $table->string('nature_revenus')->nullable();
            $table->string('autre_revenus')->nullable();

            $table->boolean('is_soelis')->default(false);
            $table->boolean('is_france_travail')->default(false);
            $table->boolean('is_cma')->default(false);
            $table->boolean('is_mission_locale')->default(false);
            $table->boolean('is_cap_emploi')->default(false);
            $table->boolean('is_cv')->default(false);

            $table->boolean('is_permis')->default(false);
            $table->boolean('vehicule_dispo')->default(false);
            $table->boolean('prevu_vehicule')->default(false);

            $table->boolean('is_diplome')->default(false);
            $table->integer('nb_diplome')->default(false);

            $table->boolean('is_logiciel')->default(false);
            $table->string('logiciel')->nullable();

            $table->string('emploi_pre_occ')->nullable();

            $table->boolean('is_reconv_pro')->default(false);

            $table->boolean('is_reprise_etudes')->default(false);

            $table->boolean('is_formation_pro')->default(false);
            
            $table->integer('nb_horaire')->nullable();

            $table->integer('nb_plan_action')->nullable();
            $table->integer('nb_rdv')->nullable();

            $table->string('infos_comp')->nullable();

            $table->timestamps();
        });

        Schema::create('enfants', function (Blueprint $table) {
            $table->id();
            $table->date('dte_naissance')->nullable();
            $table->string('nom')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('france_travail', function (Blueprint $table) {
            $table->id();
            $table->date('dte_inscription')->nullable();
            $table->string('nom_ref')->nullable();
            $table->timestamps();
        });
        Schema::create('soelis', function (Blueprint $table) {
            $table->id();
            $table->date('dte_inscription')->nullable();
            $table->string('nom_ref')->nullable();
            $table->timestamps();
        });
        Schema::create('cma', function (Blueprint $table) {
            $table->id();
            $table->date('dte_inscription')->nullable();
            $table->string('nom_ref')->nullable();
            $table->timestamps();
        });
        Schema::create('mission_locale', function (Blueprint $table) {
            $table->id();
            $table->date('dte_inscription')->nullable();
            $table->string('nom_ref')->nullable();
            $table->timestamps();
        });
        Schema::create('cap_emploi', function (Blueprint $table) {
            $table->id();
            $table->date('dte_inscription')->nullable();
            $table->string('nom_ref')->nullable();
            $table->timestamps();
        });
        Schema::create('cv', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->date('dte_travailler')->nullable();
            $table->timestamps();
        });
        Schema::create('permis', function (Blueprint $table) {
            $table->id();
            $table->string('categorie')->nullable();
            $table->string('type')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->integer('nb_annee')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('langues', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_atelier')->default(false);
            $table->integer('fr_ecrit')->nullable();
            $table->integer('fr_parle')->nullable();
            $table->integer('fr_lu')->nullable();
            $table->integer('en_ecrit')->nullable();
            $table->integer('en_parle')->nullable();
            $table->integer('en_lu')->nullable();
            $table->boolean('is_autre')->default(false);
            $table->string('autre')->nullable();
            $table->timestamps();
        });
        Schema::create('reconv_pro', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_form_prevue')->default(false);
            $table->string('nom')->nullable();
            $table->date('date')->nullable();
            $table->string('duree')->nullable();
            $table->timestamps();
        });
        Schema::create('reprise_etudes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_diplome')->nullable();
            $table->timestamps();
        });
        Schema::create('formation_pro', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->nullable();
            $table->string('nom')->nullable();
            $table->timestamps();
        });
        Schema::create('metier_souhaite', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('secteur_act')->nullable();
            $table->string('secteur_geo')->nullable();
            $table->timestamps();
        });
        Schema::create('horaires', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('plans_action', function (Blueprint $table) {
            $table->id();
            $table->string('action_menee')->nullable();
            $table->string('objectif')->nullable();
            $table->string('moyen_oeuvre')->nullable();
            $table->date('echeance')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('rdv', function (Blueprint $table) {
            $table->id();
            $table->string('contexte')->nullable();
            $table->date('date')->nullable();
            $table->foreignId('inscrit_id')->constrained('inscrits')->onDelete('cascade');
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
