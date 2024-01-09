<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function register_acc (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            //création du nom de login
            $nom = $request['name'];
            $compteur = 0;
            $max=strlen($nom);
            $lenom = "";
            $i=0;
            
            while($nom[$i] != " ")
            {
                $i++;
                $compteur = $compteur + 1;
            }
            for($s=0; $s < $compteur; $s++)
            {
                $lenom = $lenom . $nom[$s];
            }
            $compteur = $compteur + 1;
            $pseudo = strtolower($nom[$compteur].$lenom);

            $user= new User();
            $user->name= $request['name'];
            $user->password= $request['password'];
            $user->pseudo= $pseudo;
            $user->save();
            return redirect()->route('show-comptes')->with("success","L'accompagnateur a été crée");
        } 
		catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
}
