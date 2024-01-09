<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscritsController extends Controller
{

   public function show_inscrits() {
    
    return view('inscrits');
   
}

   public function show_comptes() {
    
    return view('comptes');
   
}


}
