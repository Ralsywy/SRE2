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
            'name' => 'required|min:2',
            'prenom' => 'required|min:2',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            if($request['password_confirmation']==$request['password']){
            //création du nom de login
            $nom = $request['name'];
            $prenom = $request['prenom'];
            $pseudo=strtolower($prenom[0].$nom);
            $fullName = $nom . " " . $prenom;

            $user= new User();
            $user->name= $fullName;
            $user->password= $request['password'];
            $user->pseudo= $pseudo;
            $user->save();
            return redirect()->route('voir-acc')->with("success","L'accompagnateur a été crée");
            }
            else{
                return back()->withErrors("Le mot de passe de confirmation ne correspond pas au mot de passe")->withInput();
            }
        } 
		catch (\Exception $e) {
            return back()->withErrors("Erreur avec la connexion à la base de données")->withInput();
        }
    }
}
