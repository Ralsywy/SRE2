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
        $inscrits=Inscrit::with("capEmploi")->get();;
        return view('voir-inscrits',compact('inscrits'));
    } 
    catch (\Exception $e) {
        return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
    }
   
}

   


}
