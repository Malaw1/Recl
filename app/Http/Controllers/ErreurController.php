<?php

namespace App\Http\Controllers;

use App\Erreur;
use App\Collecteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ErreurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collect = Erreur::join('collecteurs', 'collecteurs.matricule', '=', 'erreurs.matricule')
        ->select('collecteurs.matricule', 'collecteurs.matricule', 'collecteurs.prenom', 'collecteurs.nom', DB::raw('sum(nombre_erreur) as total'))
        ->groupBy('erreurs.matricule')
        ->get();

        //dd($collect);

        return view('erreur.index', ['collect'=> $collect]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('erreur.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->date;
        dd($request->date);
        $erreur = Erreur::create([
            'nombre_erreur' => $request->nombre_erreur,
            'matricule' => $request->matricule,
            'date' => $request->date
            ]);
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Erreur  $erreur
     * @return \Illuminate\Http\Response
     */
    public function show(Erreur $erreur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Erreur  $erreur
     * @return \Illuminate\Http\Response
     */
    public function edit(Erreur $erreur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Erreur  $erreur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Erreur $erreur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Erreur  $erreur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Erreur $erreur)
    {
        //
    }
}
