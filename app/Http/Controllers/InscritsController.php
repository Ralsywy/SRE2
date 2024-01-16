<?php

namespace App\Http\Controllers;

use App\Models\Inscrit;
use App\Models\User;
use Illuminate\Http\Request;

class InscritsController extends Controller
{

   public function creer_inscrit() {
    
    return view('creer-inscrit');
   
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

   


}
