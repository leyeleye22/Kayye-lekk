<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeClientController extends Controller
{
    public function home(){
       
        return view('client.dashboard');
    }
    public function dashboard(){
        $produits= Produit::all();
        return view('admin.dashboard',compact('produits'));
    }
}
