<?php

namespace App\Http\Controllers;

use App\Models\Inscrit;
use App\Models\Rdc;
use App\Models\User;
use Illuminate\Http\Request;

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
        $users=User::all();
        $inscrit = Inscrit::find($id);
        return view('modifier-inscrit',compact('inscrit'),compact('users'));
    }

    public function supp_inscrit($id){
        $inscrit = Inscrit::find($id);
        $inscrit->delete();
        return redirect()->route('voir-inscrits')->with("success","L'inscrit a été supprimé");
    }
    public function creer_inscription (Request $request){
            try {
                $inscrit= new Inscrit();
                $inscrit->dte_contact= $request['dte_contact'];
                $inscrit->origine_contact= $request['origine_contact'];
                $inscrit->is_rdc= $request['is_rdc'];
                $inscrit->is_rdc= $request['is_benevole'];
                $inscrit->user_id= $request['user_id'];
                $inscrit->civilite= $request['civilite'];
                $inscrit->nom= $request['nom'];
                $inscrit->prenom= $request['prenom'];
                $inscrit->dte_naissance= $request['dte_naissance'];
                $inscrit->save();
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
   


}
