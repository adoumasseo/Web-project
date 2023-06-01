<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\registerRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }

    public function  register(registerRequest $request)
    {
        $naissance_file_name = $request->input('name'). '.' .$request->file('naissance_acte')->extension();
        $path_naissance =  $request->file('naissance_acte')->storeAs(
            'ActesDeNaissanceDir' ,
            $naissance_file_name,
            'public'
        );
        $photo_file_name = $request->input('name'). '.' .$request->file('photo')->extension();
        $path_photo =  $request->file('photo')->storeAs(
            'PhotosDir' ,
            $photo_file_name,
            'public'
        );
        $certificat_file_name = $request->input('name'). '.' .$request->file('certificat_medical')->extension();
        $certificat_naissance_path =  $request->file('certificat_medical')->storeAs(
            'CertificatDir' ,
            $certificat_file_name,
            'public'
        );
        $user = User::create(
            [
                'name' => $request->input('name'),
                'prenom' => $request->input('prenom'),
                'email' => $request->input('email'),
                'naissance' => $request->input('naissance'),
                'telephone' => $request->input('tel'),
                'login' => $request->input('login'),
                'acte_naissance' => $path_naissance,
                'photo' => $path_photo,
                'certificat_medical' => $certificat_naissance_path,
                'serie' => $request->input('serie'),
                'password' => Hash::make($request->input('password')),
                'groupe_id' => 1
            ]
        );
        return redirect()->route('accueil.etudiant' , ["id" => $user->id])->with('is_signup' , 'Compte créé avec succès');

    }

    public function login()
    {
        return  view('auth.login');
    }

    public function doLogin( loginRequest $request)
    {
        $credentials  = $request->validate(
            [
                'email' => "required|email",
                'login' => "required",
                'password' => "required|min:8"

            ]
        );
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if($request->is_admin)
            {
                return redirect()->intended(route('accueil.dashboard'));
            }
            if($request->id_prof)
            {
                // Ecrire le code ici pour la redirection du prof
            }
            return redirect()->intended(route('accueil.etudiant' , ['id' => $request->id]));
        }

        return redirect()->route('form')->with('Error' , 'Informations incorrectes ,  Essayer à nouveau');

    }

    public function isLogin()
    {
        return view('auth.isLogin');
    }
}
