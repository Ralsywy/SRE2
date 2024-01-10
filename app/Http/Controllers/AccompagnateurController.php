<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccompagnateurController extends Controller
{
    public function voir_acc() {
    
        try {
            $accompagnateurs=User::all();
            return view('voir-acc',compact('accompagnateurs'));
        } 
        catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
       
    }
    
    public function supp_acc($id){
        $accompagnateur = User::find($id);
        $accompagnateur->delete();
        return redirect()->route('voir-acc')->with("success","L'accompagnateur a été supprimée");
    }
}
