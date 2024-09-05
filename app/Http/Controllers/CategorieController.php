<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function lister()
    {
        $categories= Categorie::all();
        return view('admin.categorie.lister', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajouterCategorie()
    {
        return view('admin.categorie.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ajouter(Request $request)
    {
        $categorie= new  Categorie();
        $categorie->nomCategorie=$request->nomCategorie;
        $categorie->save();
        return redirect()->route('lister.categorie')->with('success', 'Categorie ajouter avec success.');
    }

    /**
     * Display the specified resource.
     */
    public function editerCategorie($id)
    {
        $categorie=Categorie::find($id);
        return view('admin.categorie.editer', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function modifier(Request $request)
    {
        
        $categorie=Categorie::find($request->id);
        $categorie->nomCategorie=$request->nomCategorie;
        $categorie->save();
        return redirect()->route('lister.categorie')->with('success', 'Categorie modifié avec success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function supprimer(Request $request)
    {
        $categorie=Categorie::find($request->id);
        $categorie->delete();
        return redirect()->back()->with('success', 'Categorie supprimé avec success.');
    }
}
