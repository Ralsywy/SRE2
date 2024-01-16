<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Inscrit extends Model
{
    use HasFactory;

    public function capEmploi(): HasOne
    {
        return $this->hasOne(CapEmploi::class);
    }
    public function rdc(): HasOne
    {
        return $this->hasOne(Rdc::class);
    }
    public function cma(): HasOne
    {
        return $this->hasOne(Cma::class);
    }
    public function cv(): HasOne
    {
        return $this->hasOne(Cv::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function formationPro(): HasOne
    {
        return $this->FormationPro(CapEmploi::class);
    }
    public function franceTravail(): HasOne
    {
        return $this->hasOne(FranceTravail::class);
    }
    public function langue(): HasOne
    {
        return $this->Langue(CapEmploi::class);
    }
    public function metierSouhaite(): HasOne
    {
        return $this->MetierSouhaite(CapEmploi::class);
    }
    public function missionLocale(): HasOne
    {
        return $this->MissionLocale(CapEmploi::class);
    }
    public function reconvPro(): HasOne
    {
        return $this->ReconvPro(CapEmploi::class);
    }
    public function repriseEtude(): HasOne
    {
        return $this->hasOne(RepriseEtude::class);
    }
    public function soelis(): HasOne
    {
        return $this->hasOne(Soelis::class);
    }
    public function diplomes(): HasMany
    {
        return $this->hasMany(Diplome::class);
    }
    public function enfants(): HasMany
    {
        return $this->hasMany(Enfant::class);
    }
    public function horaires(): HasMany
    {
        return $this->hasMany(Horaire::class);
    }
    public function permis(): HasMany
    {
        return $this->hasMany(Permis::class);
    }
    public function planActions(): HasMany
    {
        return $this->hasMany(PlanAction::class);
    }
    public function rdvs(): HasMany
    {
        return $this->hasMany(Rdv::class);
    }
}
