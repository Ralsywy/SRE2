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
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            $inscrits=Inscrit::where('statut','LIKE',1)->with("user")->get();
            return view('voir-inscrits',compact('inscrits'));
        } 
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    
    }
    public function voir_inscrits_term() {
        
        try {
            $inscrits=Inscrit::where('statut','LIKE',0)->with("user")->get();
            return view('voir-inscrits-term',compact('inscrits'));
        } 
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    
    }

    public function dashboard() {

        try {
            
            $finish = Inscrit::where('statut', 0)->count();
            $progress = Inscrit::where('statut', 1)->count();
            $france = Inscrit::where('is_france_travail', 1)->count();
            $soelis = Inscrit::where('is_soelis', 1)->count();
            $cma = Inscrit::where('is_cma', 1)->count();
            $mission_locale = Inscrit::where('is_mission_locale', 1)->count();
            $cap = Inscrit::where('is_cap_emploi', 1)->count();
            $total = Inscrit::count();

            if ($total > 0) {
                $finishpourc = ($finish / $total) * 100;
                $finishpourc = number_format($finishpourc, 1);

                $progresspourc = ($progress / $total) * 100;
                $progresspourc = number_format($progresspourc, 1);

                $francepourc = ($france / $total) * 100;
                $francepourc = number_format($francepourc, 1);

                $soelispourc = ($soelis / $total) * 100;
                $soelispourc = number_format($soelispourc, 1);

                $cmapourc = ($cma / $total) * 100;
                $cmapourc = number_format($cmapourc, 1);

                $mission_localepourc = ($mission_locale / $total) * 100;
                $mission_localepourc = number_format($mission_localepourc, 1);

                $cappourc = ($cap / $total) * 100;
                $cappourc = number_format($cappourc, 1);
            } else {
                $finishpourc = 0;
                $progresspourc = 0;
                $francepourc = 0;
                $soelispourc = 0;
                $cmapourc = 0;
                $mission_localepourc = 0;
                $cappourc = 0;
            }

            return view('dash', compact('finish', 'progress', 'finishpourc', 'progresspourc', 'francepourc', 'soelispourc', 'cmapourc', 'mission_localepourc', 'cappourc'));
        } 
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }

    }

    public function reprendre($id){
        try{
        $inscrit = Inscrit::find($id);
        $inscrit->statut= 1;
        $inscrit->save();
        return back()->with("success","Le dossier de l'inscrit a été repris");
        }
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
    public function terminer($id){
        try{
        $inscrit = Inscrit::find($id);
        $inscrit->statut= 0;
        $inscrit->dte_cloture= date('Y-m-d');
        $inscrit->save();
        return back()->with("success","Le dossier de l'inscrit a été cloturé");
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

    public function voir_inscrit($id){
        try{
        $users=User::all();
        $inscrit = Inscrit::find($id);
        return view('voir-inscrit',compact('inscrit'),compact('users'));
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
                $inscrit->nationalite= ucfirst($request['nationalite']);
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
                if($request['vehicule_dispo']==0){
                    $inscrit->prevu_vehicule= $request['prevu_vehicule'];
                    if($request['prevu_vehicule']==1){
                        $inscrit->dte_achat= $request['dte_achat'];
                    }
                }
                //page 4
                $inscrit->is_diplome= $request['is_diplome'];
                $inscrit->nb_diplome= $request['nb_diplome'];
                $inscrit->is_reconv_pro= $request['is_reconv_pro'];
                $inscrit->is_reprise_etudes= $request['is_reprise_etudes'];
                $inscrit->is_formation_pro= $request['is_formation_pro'];
                $inscrit->is_logiciel= $request['is_logiciel'];
                if($request['is_logiciel']==1){
                    $inscrit->logiciel= $request['logiciel'];
                }
                $inscrit->dte_arrivee_fr= $request['dte_arrivee_fr'];
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
                if($request['nb_diplome']==0 || $request['nb_diplome']==null){
                    $diplome=new Diplome();
                    $diplome->nb_annee= $request['nb_annee'];
                    $diplome->type= $request['diplome_type'];
                    $diplome->inscrit_id=$inscrit->id;
                    $diplome->save();
                }
                else{
                    if($request['nb_diplome']>0){
                        for($i=1;$i <= $request['nb_diplome']; ++$i){
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
                if($request['is_formation_pro']==1){
                    $formation_pro=new FormationPro();
                    $formation_pro->type= $request['type_formation_pro'];
                    if($request['type_formation_pro']=="qualifiante"){
                        $formation_pro->nom= $request['qualifiante_formation_pro'];
                    }
                    else{
                        $formation_pro->nom= $request['diplome_formation_pro'];
                    }
                    $formation_pro->inscrit_id=$inscrit->id;
                    $formation_pro->save();
                }
                //reprise
                if($request['is_reprise_etudes']==1){
                    $reprise_etudes=new RepriseEtude();
                    $reprise_etudes->nom_diplome= $request['nom_diplome'];
                    $reprise_etudes->inscrit_id=$inscrit->id;
                    $reprise_etudes->save();
                }
                //reconv pro
                if($request['is_reconv_pro']==1){
                    $reconv_pro=new ReconvPro();
                    $reconv_pro->is_form_prevue= $request['is_form_prevue'];
                    if($request['is_form_prevue']==1){
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
                if($request['is_permis']==1){
                    $permis=new Permis();
                    $permis->type=$request['type'];
                    if($request['type']=="autos"){
                        $permis->categorie=$request['autos_categorie'];
                    }
                    else{
                        if($request['type']=="motos"){
                            $permis->categorie=$request['motos_categorie'];
                        }
                        else{
                            if($request['type']=="marchandises"){
                                $permis->categorie=$request['marchandises_categorie'];
                            }
                        }
                    }
                    $permis->autre=$request['autre_permis'];
                    $permis->inscrit_id=$inscrit->id;
                    $permis->save();
                }
                //cv
                if($request['is_cv']==1){
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
                    if($request['is_cv']==0){
                        $cv=new Cv();
                        $cv->dte_travailler=$request['dte_travailler'];
                        $cv->inscrit_id=$inscrit->id;
                        $cv->save();
                    }
                }
                //cap_emploi
                if($request['is_cap_emploi']==1){
                    $cap_emploi=new CapEmploi();
                    $cap_emploi->dte_inscription=$request['cap_dte_inscription'];
                    $cap_emploi->nom_ref=$request['cap_nom_ref'];
                    $cap_emploi->inscrit_id=$inscrit->id;
                    $cap_emploi->save();
                }
                //mission_locale
                if($request['is_mission_locale']==1){
                    $mission_locale=new MissionLocale();
                    $mission_locale->dte_inscription=$request['mission_dte_inscription'];
                    $mission_locale->nom_ref=$request['mission_nom_ref'];
                    $mission_locale->inscrit_id=$inscrit->id;
                    $mission_locale->save();
                }
                //cma
                if($request['is_cma']==1){
                    $cma=new Cma();
                    $cma->dte_inscription=$request['cma_dte_inscription'];
                    $cma->nom_ref=$request['cma_nom_ref'];
                    $cma->inscrit_id=$inscrit->id;
                    $cma->save();
                }
                //soelis
                if($request['is_soelis']==1){
                    $soelis=new Soelis();
                    $soelis->dte_inscription=$request['soelis_dte_inscription'];
                    $soelis->nom_ref=$request['soelis_nom_ref'];
                    $soelis->inscrit_id=$inscrit->id;
                    $soelis->save();
                }
                //france travail
                if($request['is_france_travail']==1){
                    $france=new FranceTravail();
                    $france->dte_inscription=$request['france_dte_inscription'];
                    $france->nom_ref=$request['france_nom_ref'];
                    $france->inscrit_id=$inscrit->id;
                    $france->save();
                }
                //enfants
                if($request['is_enfant']==1){
                    for($i = 1; $i <= $request['nb_enfant']; ++$i) {
                        $enfant=new Enfant();
                        $enfant->dte_naissance=$request['dte_naissance_enfant'.$i];
                        $enfant->nom=$request['nom_enfant'.$i];
                        $enfant->inscrit_id=$inscrit->id;
                        $enfant->save();
                    }
                }
                //rdc
                if($request['is_rdc']==1){
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
    public function modifier_store(Request $request,$id){
        $inscrit = Inscrit::find($id);
        //page 1
        $inscrit->dte_contact= $request->get('dte_contact');
        $inscrit->origine_contact= $request->get('origine_contact');
        $inscrit->is_rdc= $request->get('is_rdc');
        $inscrit->is_benevole= $request->get('is_benevole');
        $inscrit->user_id= $request->get('user_id');
        //page 2
        $inscrit->civilite= $request->get('civilite');
        $inscrit->nom= $request->get('nom');
        $inscrit->prenom= $request->get('prenom');
        $inscrit->dte_naissance= $request->get('dte_naissance');
        $inscrit->nationalite= ucfirst($request->get('nationalite'));
        $inscrit->adresse= $request->get('adresse');
        $inscrit->code_postal= $request->get('code_postal');
        $inscrit->ville= $request->get('ville');
        $inscrit->telephone= $request->get('telephone');
        $inscrit->email= $request->get('email');
        $inscrit->situation_perso= $request->get('situation_perso');
        //page 3
        $inscrit->is_enfant= $request->get('is_enfant');
        $inscrit->nb_enfant= $request->get('nb_enfant');
        $inscrit->nature_revenus= $request->get('nature_revenus');
        $inscrit->is_demande_asile= $request->get('is_demande_asile');
        $inscrit->is_refugie_politique= $request->get('is_refugie_politique');
        if($request->get('is_demande_asile')==1||$request->get('is_refugie_politique')==1){
            $inscrit->dte_arrivee_fr= $request->get('dte_arrivee_fr');
        }
        $inscrit->is_france_travail= $request->get('is_france_travail');
        $inscrit->is_soelis= $request->get('is_soelis');
        $inscrit->is_cma= $request->get('is_cma');
        $inscrit->is_mission_locale= $request->get('is_mission_locale');
        $inscrit->is_cap_emploi= $request->get('is_cap_emploi');
        $inscrit->is_cv= $request->get('is_cv');
        $inscrit->is_permis= $request->get('is_permis');
        $inscrit->vehicule_dispo= $request->get('vehicule_dispo');
        if($request->get('vehicule_dispo')==0){
            $inscrit->prevu_vehicule= $request->get('prevu_vehicule');
            if($request->get('prevu_vehicule')==1){
                $inscrit->dte_achat= $request->get('dte_achat');
            }
        }
        //page 4
        $inscrit->is_diplome= $request->get('is_diplome');
        $inscrit->nb_diplome= $request->get('nb_diplome');
        if($request->get('is_diplome')==0){
            $inscrit->nb_diplome=0;
        }
        $inscrit->is_reconv_pro= $request->get('is_reconv_pro');
        $inscrit->is_reprise_etudes= $request->get('is_reprise_etudes');
        $inscrit->is_formation_pro= $request->get('is_formation_pro');
        $inscrit->is_logiciel= $request->get('is_logiciel');
        if($request->get('is_logiciel')==1){
            $inscrit->logiciel= $request->get('logiciel');
        }
        //page 5
        $langue=Langue::where('inscrit_id','LIKE',$id);
        $langue=Langue::firstOrCreate(['inscrit_id' => $id]);
        $langue->is_atelier= $request->get('is_atelier');
        $langue->fr_ecrit= $request->get('fr_ecrit');
        $langue->fr_parle= $request->get('fr_parle');
        $langue->fr_lu= $request->get('fr_lu');
        $langue->en_ecrit= $request->get('en_ecrit');
        $langue->en_parle= $request->get('en_parle');
        $langue->en_lu= $request->get('en_lu');
        $langue->is_autre= $request->get('is_autre');
        if($request->get('is_autre')==1){
            $langue->autre= $request->get('autre_langue');
        }
        else{
            $langue->autre= null;
        }
        $langue->save();
        //page 6
        $inscrit->infos_comp= $request->get('infos_comp');
        $inscrit->save();

        //diplome
        Diplome::where('inscrit_id',$inscrit->id)->delete();
        if($request->get('is_diplome')==0){
            $diplome=new Diplome();
            $diplome->nb_annee= $request['nb_annee'];
            $diplome->type= $request['diplome_type'];
            $diplome->inscrit_id=$inscrit->id;
            $diplome->save();
        }
        else{
            if($request->get('is_diplome')==1){
                for($i=1;$i <= $request['nb_diplome']; ++$i){
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
        //enfants
        Enfant::where('inscrit_id',$inscrit->id)->delete();
        if($request->get('is_enfant')==1){
            for($i = 1; $i <= $request->get('nb_enfant'); ++$i) {
                if($request['nom_enfant'.$i]!=null){
                    $enfant=new Enfant();
                    $enfant->dte_naissance=$request['dte_naissance_enfant'.$i];
                    $enfant->nom=$request['nom_enfant'.$i];
                    $enfant->inscrit_id=$inscrit->id;
                    $enfant->save();
                }
                else{
                    //
                }
                
            }
        }
        
        //horaires
        Horaire::where('inscrit_id', $inscrit->id)
                ->delete();
        for($i = 1; $i <= 8; ++$i) {
            if(isset($request['nb_horaire'.$i])){
                $horaire=new Horaire();
                $horaire->type= $request['nb_horaire'.$i];
                $horaire->inscrit_id=$inscrit->id;
                $horaire->save();
            }
        }
        
        //metier souhaite
        $metier_souhaite=MetierSouhaite::where('inscrit_id','LIKE',$id);
        if($request->get('nom_metier')!=null || $request->get('secteur_act')!=null || $request->get('secteur_geo')!=null){
            $metier_souhaite=MetierSouhaite::firstOrCreate(['inscrit_id' => $id]);
            $metier_souhaite->nom= $request->get('nom_metier');
            $metier_souhaite->secteur_act= $request->get('secteur_act');
            $metier_souhaite->secteur_geo= $request->get('secteur_geo');
            $metier_souhaite->save();
        }
        else{
            if($request->get('nom_metier')==null && $request->get('secteur_act')==null && $request->get('secteur_geo')==null){
                $metier_souhaite->delete();
            }
        }
        //formation pro
        $formation_pro=FormationPro::where('inscrit_id','LIKE',$id);
        if($request->get('is_formation_pro')==1){
            $formation_pro=FormationPro::firstOrCreate(['inscrit_id' => $id]);
            $formation_pro->type= $request->get('type_formation_pro');
            if($request->get('type_formation_pro')=="qualifiante"){
                $formation_pro->nom= $request->get('qualifiante_formation_pro');
            }
            else{
                $formation_pro->nom= $request->get('diplome_formation_pro');
            }
            $formation_pro->save();
        }
        else{
            if($formation_pro){
                $formation_pro->delete();
            }
        }
        //reprise etudes
        $reprise_etudes=RepriseEtude::where('inscrit_id','LIKE',$id);
        if($request->get('is_reprise_etudes')==1){
            $reprise_etudes=RepriseEtude::firstOrCreate(['inscrit_id' => $id]);
            $reprise_etudes->nom_diplome= $request->get('nom_diplome_reprise');
            $reprise_etudes->save();
        }
        else{
            if($reprise_etudes){
                $reprise_etudes->delete();
            }
        }
        //reconv pro
        $reconv_pro=ReconvPro::where('inscrit_id','LIKE',$id);
        if($request->get('is_reconv_pro')==1){
            $reconv_pro=ReconvPro::firstOrCreate(['inscrit_id' => $id]);
            $reconv_pro->is_form_prevue= $request->get('is_form_prevue');
            if($request->get('is_form_prevue')==1){
                $reconv_pro->nom= $request->get('reconv_nom');
                $reconv_pro->date= $request->get('reconv_date');
                $reconv_pro->duree= $request->get('reconv_duree');
            }
            $reconv_pro->save();
        }
        else{
            if($reconv_pro){
                $reconv_pro->delete();
            }
        }
        //permis
        $permis=Permis::where('inscrit_id','LIKE',$id);
        if($request['is_permis']==1){
            $permis=Permis::firstOrCreate(['inscrit_id' => $id]);
            $permis->type=$request->get('type');
            if($request->get('type')=="autos"){
                $permis->categorie=$request->get('autos_categorie');
            }
            else{
                if($request->get('type')=="motos"){
                    $permis->categorie=$request->get('motos_categorie');
                }
                else{
                    if($request->get('type')=="marchandises"){
                        $permis->categorie=$request->get('marchandises_categorie');
                    }
                }
            }
            $permis->autre=$request->get('autre_permis');
            $permis->save();
        }
        else{
            if($permis){
                $permis->delete();
            }
        }
        
        //cv
        $cv=Cv::where('inscrit_id','LIKE',$id);
        $cv=Cv::firstOrCreate(['inscrit_id' => $id]);
        if($request->get('is_cv')==1){
            /** @var UploadedFile|null $chemin */
            $chemin = $request->file('cv_nom');
            if($chemin!=null){
                $cvPath = $chemin->store('cv', 'public');
                $cv->nom= $cvPath;
                $cv->dte_travailler=null;
            }
            $cv->save();
        }
        else{
            if($request->get('is_cv')==0){
                $cv->nom= null;
                $cv->dte_travailler=$request->get('dte_travailler');
                $cv->save();
            }
        }
        //CapEmploi
        $CapEmploi = CapEmploi::where('inscrit_id','LIKE',$id);
        if($request->get('is_cap_emploi')==1){
            $CapEmploi=CapEmploi::firstOrCreate(['inscrit_id' => $id]);
            $CapEmploi->dte_inscription=$request->get('cap_dte_inscription');
            $CapEmploi->nom_ref=$request->get('cap_nom_ref');
            $CapEmploi->save();
        }
        else{
            if($CapEmploi){
                $CapEmploi->delete();
            }
        }
        //MissionLocale
        $MissionLocale = MissionLocale::where('inscrit_id','LIKE',$id);
        if($request->get('is_mission_locale')==1){
            $MissionLocale=MissionLocale::firstOrCreate(['inscrit_id' => $id]);
            $MissionLocale->dte_inscription=$request->get('mission_dte_inscription');
            $MissionLocale->nom_ref=$request->get('mission_nom_ref');
            $MissionLocale->save();
        }
        else{
            if($MissionLocale){
                $MissionLocale->delete();
            }
        }
        //Cma
        $Cma = Cma::where('inscrit_id','LIKE',$id);
        if($request->get('is_cma')==1){
            $Cma=Cma::firstOrCreate(['inscrit_id' => $id]);
            $Cma->dte_inscription=$request->get('cma_dte_inscription');
            $Cma->nom_ref=$request->get('cma_nom_ref');
            $Cma->save();
        }
        else{
            if($Cma){
                $Cma->delete();
            }
        }
        //soelis
        $Soelis = Soelis::where('inscrit_id','LIKE',$id);
        if($request->get('is_soelis')==1){
            $Soelis=Soelis::firstOrCreate(['inscrit_id' => $id]);
            $Soelis->dte_inscription=$request->get('soelis_dte_inscription');
            $Soelis->nom_ref=$request->get('soelis_nom_ref');
            $Soelis->save();
        }
        else{
            if($Soelis){
                $Soelis->delete();
            }
        }
        //france travail
        $franceTravail = FranceTravail::where('inscrit_id','LIKE',$id);
        if($request->get('is_france_travail')==1){
            $franceTravail=FranceTravail::firstOrCreate(['inscrit_id' => $id]);
            $franceTravail->dte_inscription=$request->get('france_dte_inscription');
            $franceTravail->nom_ref=$request->get('france_nom_ref');
            $franceTravail->save();
        }
        else{
            if($franceTravail){
                $franceTravail->delete();
            }
        }
        //rdc
        $rdc = Rdc::where('inscrit_id','LIKE',$id);
        if($request->get('is_rdc')==1){
            $rdc=Rdc::firstOrCreate(['inscrit_id' => $id]);
            $rdc->numero=$request->get('numero');
            $rdc->centre=$request->get('centre');
            $rdc->jour=$request->get('jour');
            $rdc->save();
        }
        else{
            if($rdc){
                $rdc->delete();
            }
        }
        return redirect()->route('voir-inscrits')->with("success","L'inscrit ".$inscrit->nom." ".$inscrit->prenom." été modifié");
    }
}
