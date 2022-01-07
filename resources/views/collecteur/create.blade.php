@extends('layouts.app')

@section('content')
<div class="container">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="card">
        <h5 class="card-header">Enregistrement d'un nouveau collecteur</h5>
        <div class="card-body">
            <form action="{{ route('collecteurs.store')}}" method="POST">
                @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" required  placeholder="prenom" id="prenom" name="prenom">
                            </div>
                            <div class="col">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" required placeholder="nom" id="nom" name="nom">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Matricule</label>
                                <input type="number" class="form-control" required placeholder="Matricule" id="matricule" name="matricule">
                            </div>
                            <div class="col">
                                <label for="">Categorie</label>
                                <select class="form-control" id="" name="categorie">
                                    <option value="employe">Employé</option>
                                    <option value="stagiaire">Stagiaire</option>
                                </select>
                            </div>
                        </div>
                        <br>

                <button type="submit" class="btn btn-primary btn-lg">Enregistrer</button>
            </form>
        </div>
    </div>
</div>

@endsection
