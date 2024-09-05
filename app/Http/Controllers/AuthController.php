<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
    
       $utilsateur= new User();
       $utilsateur->nom=$request->nom;
       $utilsateur->prenom=$request->prenom;
       $utilsateur->email=$request->email;
       $utilsateur->role="client";
       $utilsateur->password=$request->password;
       $utilsateur->save();
       if($utilsateur instanceof User){
        return redirect()->route('login')->with('success', 'Inscription réussie, veuillez vous connecter.');
       }
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role=='admin'){
                return redirect()->route('dashboard')->with('success', 'Connexion réussie.');
            }else{
                return redirect()->route('home')->with('success', 'Connexion réussie.');
            }
            
        }
        return redirect()->route('login')->with('error', 'Echec de connexion.');
    }
}
