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
