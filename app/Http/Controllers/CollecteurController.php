<?php

namespace App\Http\Controllers;

use App\Collecteur;
use Illuminate\Http\Request;

class CollecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collect = Collecteur::All();
        //dd($collecteur);
        return view('collecteur.index', ['collect'=> $collect]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collecteur/create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collecteur = Collecteur::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'matricule' => $request->matricule,
            'categorie' => $request->categorie
            ]);
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collecteur  $collecteur
     * @return \Illuminate\Http\Response
     */
    public function show(Collecteur $collecteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collecteur  $collecteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Collecteur $collecteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collecteur  $collecteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collecteur $collecteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collecteur  $collecteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collecteur $collecteur)
    {
        //
    }
}
