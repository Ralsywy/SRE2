<?php

namespace App\Http\Controllers;

use App\Models\CapEmploi;
use App\Models\Cma;
use App\Models\Cv;
use App\Models\Diplome;
use App\Models\Enfant;
use App\Models\FormationPro;
use App\Models\FranceTravail;
use App\Models\Horaire;
use App\Models\Inscrit;
use App\Models\Langue;
use App\Models\MetierSouhaite;
use App\Models\MissionLocale;
use App\Models\Permis;
use App\Models\PlanAction;
use App\Models\Rdc;
use App\Models\Rdv;
use App\Models\ReconvPro;
use App\Models\RepriseEtude;
use App\Models\Soelis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscritsController extends Controller
{

   public function creer_inscrit() {
    
    try {
        $accompagnateurs=User::all();
        return view('creer-inscrit',compact('accompagnateurs'));
    } 
    catch (\Exception $e) {
        return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
    }
   
    }
    public function voir_inscrits() {
        
        try {
            $inscrits=Inscrit::with("user")->get();
            return view('voir-inscrits',compact('inscrits'));
        } 
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    
    }
    public function modifier_inscrit($id){
        try{
        $users=User::all();
        $inscrit = Inscrit::find($id);
        return view('modifier-inscrit',compact('inscrit'),compact('users'));
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }

    public function supp_inscrit($id){
        try{
        $inscrit = Inscrit::find($id);
        $inscrit->delete();
        return redirect()->route('voir-inscrits')->with("success","L'inscrit a été supprimé");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function creer_inscription (Request $request){
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try{
                //page 1
                $inscrit= new Inscrit();
                $inscrit->dte_contact= $request['dte_contact'];
                $inscrit->origine_contact= $request['origine_contact'];
                $inscrit->is_rdc= $request['is_rdc'];
                $inscrit->is_benevole= $request['is_benevole'];
                $inscrit->user_id= $request['user_id'];
                //page 2
                $inscrit->civilite= $request['civilite'];
                $inscrit->nom= $request['nom'];
                $inscrit->prenom= $request['prenom'];
                $inscrit->dte_naissance= $request['dte_naissance'];
                $inscrit->nationalite= $request['nationalite'];
                $inscrit->adresse= $request['adresse'];
                $inscrit->code_postal= $request['code_postal'];
                $inscrit->ville= $request['ville'];
                $inscrit->telephone= $request['telephone'];
                $inscrit->email= $request['email'];
                $inscrit->situation_perso= $request['situation_perso'];
                //page 3
                $inscrit->is_enfant= $request['is_enfant'];
                $inscrit->nb_enfant= $request['nb_enfant'];
                $inscrit->nature_revenus= $request['nature_revenus'];
                $inscrit->autre_revenus= $request['autre_revenus'];
                $inscrit->is_demande_asile= $request['is_demande_asile'];
                $inscrit->is_refugie_politique= $request['is_refugie_politique'];
                $inscrit->is_france_travail= $request['is_france_travail'];
                $inscrit->is_soelis= $request['is_soelis'];
                $inscrit->is_cma= $request['is_cma'];
                $inscrit->is_mission_locale= $request['is_mission_locale'];
                $inscrit->is_cap_emploi= $request['is_cap_emploi'];
                $inscrit->is_cv= $request['is_cv'];
                //permis
                $inscrit->is_permis= $request['is_permis'];

                $inscrit->vehicule_dispo= $request['vehicule_dispo'];
                if($request['vehicule_dispo']=0){
                    $inscrit->prevu_vehicule= $request['prevu_vehicule'];
                    if($request['prevu_vehicule']=1){
                        $inscrit->dte_achat= $request['dte_achat'];
                    }
                }
                //page 4
                $inscrit->nb_diplome= $request['nb_diplome'];
                $inscrit->is_reconv_pro= $request['is_reconv_pro'];
                $inscrit->is_reprise_etudes= $request['is_reprise_etudes'];
                $inscrit->is_formation_pro= $request['is_formation_pro'];
                $inscrit->is_logiciel= $request['is_logiciel'];
                if($request['is_logiciel']==1){
                    $inscrit->logiciel= $request['logiciel'];
                }
                $inscrit->infos_comp= $request['infos_comp'];
                $inscrit->save();
                //page 5
                $langue=new Langue();
                    $langue->is_atelier= $request['is_atelier'];
                    $langue->fr_ecrit= $request['fr_ecrit'];
                    $langue->fr_parle= $request['fr_parle'];
                    $langue->fr_lu= $request['fr_lu'];
                    $langue->en_ecrit= $request['en_ecrit'];
                    $langue->en_parle= $request['en_parle'];
                    $langue->en_lu= $request['en_lu'];
                    $langue->is_autre= $request['is_autre'];
                    if($request['is_autre']==1){
                        $langue->autre= $request['autre_langue'];
                    }
                    $langue->inscrit_id=$inscrit->id;
                    $langue->save();
                //diplome
                if($request['nb_diplome']==0){
                    $diplome=new Diplome();
                    $diplome->nb_annee= $request['nb_annee'];
                    $diplome->type= $request['diplome_type'];
                    $diplome->inscrit_id=$inscrit->id;
                    $diplome->save();
                }
                else{
                    if($request['nb_diplome']>0){
                        for($i=0;$i < $request['nb_diplome']; ++$i){
                            $diplome=new Diplome();
                            if($request['nom_diplome_'.$i]=="brevet"){
                                $diplome->type= $request['nom_diplome_'.$i];
                            }
                            else{
                                if($request['nom_diplome_'.$i]=="cap"){
                                    $diplome->type= $request['nom_diplome_'.$i];
                                    $diplome->specialite= $request['niveau_cap_'.$i];
                                }
                                else{
                                    if($request['nom_diplome_'.$i]=="bep"){
                                        $diplome->type= $request['nom_diplome_'.$i];
                                        $diplome->specialite= $request['niveau_bep_'.$i];
                                    }
                                    else{
                                        if($request['nom_diplome_'.$i]=="bac"){
                                            $diplome->type= $request['nom_diplome_'.$i];
                                            $diplome->specialite= $request['niveau_bac_'.$i];
                                        }
                                        else{
                                            if($request['nom_diplome_'.$i]=="bac+2"){
                                                $diplome->type= $request['nom_diplome_'.$i];
                                                $diplome->specialite= $request['niveau_bac+2_'.$i];
                                            }
                                            else{
                                                if($request['nom_diplome_'.$i]=="licence"){
                                                    $diplome->type= $request['nom_diplome_'.$i];
                                                    $diplome->specialite= $request['niveau_licence_'.$i];
                                                }
                                                else{
                                                    if($request['nom_diplome_'.$i]=="master1"){
                                                        $diplome->type= $request['nom_diplome_'.$i];
                                                        $diplome->specialite= $request['niveau_master1_'.$i];
                                                    }
                                                    else{
                                                        if($request['nom_diplome_'.$i]=="master2"){
                                                            $diplome->type= $request['nom_diplome_'.$i];
                                                            $diplome->specialite= $request['niveau_master2_'.$i];
                                                        }
                                                        else{
                                                            if($request['nom_diplome_'.$i]=="autre"){
                                                                $diplome->type= $request['nom_diplome_'.$i];
                                                                $diplome->specialite= $request['niveau_autre_'.$i];
                                                            }
                                                            else{
                                                                if($request['nom_diplome_'.$i]=="formation continue"){
                                                                    $diplome->type= $request['nom_diplome_'.$i];
                                                                    $diplome->specialite= $request['niveau_formation_continue_'.$i];
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            $diplome->inscrit_id=$inscrit->id;
                            $diplome->save();
                        }
                    }
                }
                //horaires
                for($i = 1; $i <= 8; ++$i) {
                    if(isset($request['nb_horaire'.$i])){
                        $horaire=new Horaire();
                        $horaire->type= $request['nb_horaire'.$i];
                        $horaire->inscrit_id=$inscrit->id;
                        $horaire->save();
                    }
                }
                //metier souhaite
                if($request['nom_metier']!=null || $request['secteur_act']!=null || $request['secteur_geo']!=null){
                    $metier_souhaite=new MetierSouhaite();
                    $metier_souhaite->nom= $request['nom_metier'];
                    $metier_souhaite->secteur_act= $request['secteur_act'];
                    $metier_souhaite->secteur_geo= $request['secteur_geo'];
                    $metier_souhaite->inscrit_id=$inscrit->id;
                    $metier_souhaite->save();
                }

                //formation pro
                if($request['is_formation_pro']=1){
                    $formation_pro=new FormationPro();
                    $formation_pro->type= $request['type_formation_pro'];
                    if($request['type_formation_pro']="Qualifiante"){
                        $formation_pro->nom= $request['qualifiante_formation_pro'];
                    }
                    else{
                        $formation_pro->nom= $request['diplome_formation_pro'];
                    }
                    $formation_pro->inscrit_id=$inscrit->id;
                    $formation_pro->save();
                }
                //reprise
                if($request['is_reprise_etudes']=1){
                    $reprise_etudes=new RepriseEtude();
                    $reprise_etudes->nom_diplome= $request['nom_diplome'];
                    $reprise_etudes->inscrit_id=$inscrit->id;
                    $reprise_etudes->save();
                }
                //reconv pro
                if($request['is_reconv_pro']=1){
                    $reconv_pro=new ReconvPro();
                    $reconv_pro->is_form_prevue= $request['is_form_prevue'];
                    if($request['is_form_prevue']=1){
                        $reconv_pro->nom= $request['reconv_nom'];
                        $reconv_pro->date= $request['reconv_date'];
                        $reconv_pro->duree= $request['reconv_duree'];
                    }
                    else{
                        //
                    }
                    $reconv_pro->inscrit_id=$inscrit->id;
                    $reconv_pro->save();
                }
                else{
                    //
                }
                //nb permis
                if($request['is_permis']=1){
                    $permis=new Permis();
                    $permis->categorie=$request['categorie'];
                    $permis->type=$request['type'];
                    $permis->autre=$request['autre'];
                    $permis->inscrit_id=$inscrit->id;
                    $permis->save();
                }
                //cv
                if($request['is_cv']=1){
                    $cv=new Cv();
                    /** @var UploadedFile|null $chemin */
                    $chemin = $request->file('cv_nom');
                    if($chemin!=null){
                        $cvPath = $chemin->store('cv', 'public');
                        $cv->nom= $cvPath;
                    }
                    $cv->inscrit_id=$inscrit->id;
                    $cv->save();
                }
                else{
                    $cv=new Cv();
                    $cv->dte_travailler=$request['dte_travailler'];
                    $cv->inscrit_id=$inscrit->id;
                    $cv->save();
                }
                //cap_emploi
                if($request['is_cap_emploi']=1){
                    $cap_emploi=new CapEmploi();
                    $cap_emploi->dte_inscription=$request['cap_dte_inscription'];
                    $cap_emploi->nom_ref=$request['cap_nom_ref'];
                    $cap_emploi->inscrit_id=$inscrit->id;
                    $cap_emploi->save();
                }
                //mission_locale
                if($request['is_mission_locale']=1){
                    $mission_locale=new MissionLocale();
                    $mission_locale->dte_inscription=$request['mission_dte_inscription'];
                    $mission_locale->nom_ref=$request['mission_nom_ref'];
                    $mission_locale->inscrit_id=$inscrit->id;
                    $mission_locale->save();
                }
                //cma
                if($request['is_cma']=1){
                    $cma=new Cma();
                    $cma->dte_inscription=$request['cma_dte_inscription'];
                    $cma->nom_ref=$request['cma_nom_ref'];
                    $cma->inscrit_id=$inscrit->id;
                    $cma->save();
                }
                //soelis
                if($request['is_soelis']=1){
                    $soelis=new Soelis();
                    $soelis->dte_inscription=$request['soelis_dte_inscription'];
                    $soelis->nom_ref=$request['soelis_nom_ref'];
                    $soelis->inscrit_id=$inscrit->id;
                    $soelis->save();
                }
                //france travail
                if($request['is_france_travail']=1){
                    $france=new FranceTravail();
                    $france->dte_inscription=$request['france_dte_inscription'];
                    $france->nom_ref=$request['france_nom_ref'];
                    $france->inscrit_id=$inscrit->id;
                    $france->save();
                }
                //enfants
                if($request['is_enfant']=1 && $request['nb_enfant']!=0){
                    for($i = 1; $i <= $request['nb_enfant']; ++$i) {
                        $enfant=new Enfant();
                        $enfant->dte_naissance=$request['dte_naissance'.$i];
                        $enfant->nom=$request['nom_enfant'.$i];
                        $enfant->inscrit_id=$inscrit->id;
                        $enfant->save();
                    }
                }
                //rdc
                if($request['is_rdc']=1){
                    $rdc=new Rdc();
                    $rdc->numero=$request['numero'];
                    $rdc->centre=$request['centre'];
                    $rdc->jour=$request['jour'];
                    $rdc->inscrit_id=$inscrit->id;
                    $rdc->save();
                }
                return redirect()->route('voir-inscrits')->with("success","L'inscrit a été crée");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function voir_rdv($id){
        try{
        $inscrit = Inscrit::find($id);
        return view('voir-rdv',compact('inscrit'));
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function creer_plan (Request $request,$id){
        try{
            $planAction= new PlanAction();
            $planAction->action_menee= $request['action_menee'];
            $planAction->objectif= $request['objectif'];
            $planAction->moyen_oeuvre= $request['moyen_oeuvre'];
            $planAction->echeance= $request['echeance'];
            $planAction->inscrit_id=$id;
            $planAction->save();
            return redirect()->route('voir-rdv',$id)->with("success","Le plan d'action a été crée");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function supp_plan($id){
        try{
        $plan = PlanAction::find($id);
        $plan->delete();
        return back()->with("success","Le plan d'action a été supprimé");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function creer_rdv (Request $request,$id){
        try{
            $rdv= new Rdv();
            $rdv->contexte= $request['contexte'];
            $rdv->date= $request['date'];
            $rdv->inscrit_id=$id;
            $rdv->save();
            return redirect()->route('voir-rdv',$id)->with("success","Le rendez-vous a été crée");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function supp_rdv($id){
        try{
        $rdv = Rdv::find($id);
        $rdv->delete();
        return back()->with("success","Le rendez-vous a été supprimé");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
}
