<?php

namespace App\Http\Controllers;
use App\Collecteur;
use App\Erreur;
use App\reclamation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $collect = Erreur::join('collecteurs', 'collecteurs.matricule', '=', 'erreurs.matricule')
        ->select('collecteurs.matricule', 'collecteurs.prenom', 'collecteurs.nom', DB::raw('sum(nombre_erreur) as total'))
        ->groupBy('erreurs.matricule')
        ->get();

        $col = Erreur::join('collecteurs', 'collecteurs.matricule', '=', 'erreurs.matricule')->first();
        $date = $col->date;

        $nbrerreur = Erreur::join('collecteurs', 'collecteurs.matricule', '=', 'erreurs.matricule')
        ->select(DB::raw('sum(nombre_erreur) as total'))
        ->first();

        $nbrrecN = Reclamation::join('clients', 'clients.id', '=', 'reclamations.id')
        ->select(DB::raw('count(reclamations.id) as total'))
        ->first();

        $nbrrec = Reclamation::join('clients', 'clients.id', '=', 'reclamations.id')
        ->select('reclamations.motif', DB::raw('count(reclamations.id) as recm'), DB::raw('count(reclamations.id) as total'))
        ->groupBy('reclamations.motif')
        ->get();

        $nbrerreurm = Erreur::join('collecteurs', 'collecteurs.matricule', '=', 'erreurs.matricule')
        ->select(DB::raw('sum(nombre_erreur) as total'))
        ->where('date', )
        ->first();
        
        //dd($nbrrec);
       // return view('collecteur.index', ['collect'=> $collect]) ;
        return view('welcome', ['collect'=> $collect, 'nbrerreur' => $nbrerreur, 'nbrrecN' => $nbrrecN, 'nbrrec' => $nbrrec]);
    }


}
