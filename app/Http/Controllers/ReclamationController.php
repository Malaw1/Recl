<?php

namespace App\Http\Controllers;

use App\reclamation;
use App\Client;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rec = Client::join('reclamations', 'reclamations.code_client', '=', 'clients.code_client')
        ->where('status','En traitement')
        ->get();
        //dd($collecteur);
        return View('reclamation.index', ['rec' => $rec]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('reclamation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth()->user()->id;
        $erreur = reclamation::create([
            'segment' => $request->segment,
            'userid' => $id,
            'code_client' => $request->code_client,
            'date' => $request->date,
            'motif' => $request->motif,
            'commentaire' => 'No comment',
            'status' => 'En traitement',


            ]);
            return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(reclamation $reclamation)
    {
        $rec = Client::join('reclamations', 'reclamations.code_client', '=', 'clients.code_client')
        ->where('reclamations.id',$reclamation->id)
        ->first();
       // dd($rec);
        return View('reclamation.show', ['rec' => $rec]);
        dd($reclamation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(reclamation $reclamation)
    {
        $rec = Client::join('reclamations', 'reclamations.code_client', '=', 'clients.code_client')
        ->where('reclamations.id',$reclamation->id)
        ->first();
       // dd($rec);
        return View('reclamation.edit', ['rec' => $rec]);
        dd($reclamation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reclamation $reclamation)
    {
        $update = Reclamation::where('id', '=', $reclamation->id)
        ->update([
            'status' => $request->status, 
            'commentaire' => $request->commentaire
        ]);

        $rec = Client::join('reclamations', 'reclamations.code_client', '=', 'clients.code_client')
        ->where('status','En traitement')
        ->get();
        return View('reclamation.index', ['rec' => $rec]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reclamation $reclamation)
    {
        //
    }

    public function traite()
    {
        $rec = Client::join('reclamations', 'reclamations.code_client', '=', 'clients.code_client')
        ->where('status','Terminé')
        ->get();
       //dd($rec);
        return View('reclamation.termine', ['rec' => $rec]);
    }
}
