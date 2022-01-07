@extends('layouts.app')

@section('content')
<div class="container">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="card">
        <h5 class="card-header">Suivi des Erreurs</h5>
        <div class="card-body">
            <form action="{{ route('erreurs.store')}}" method="POST">
                @csrf
        
                        <div class="form-row">
                            <div class="col">
                                <label for="">Matricule</label>
                                <input type="number" class="form-control" required placeholder="Matricule" id="matricule" name="matricule">
                            </div>
                            <div class="col">
                                <label for="">Nombre d'erreurs</label>
                                <input type="number" class="form-control" required placeholder="Nombre d'Erreurs" id="matricule" name="nombre_erreur">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Date</label>
                                <input type="date" class="form-control" required placeholder="Matricule" id="matricule" name="date">
                            </div>
                            
                        </div>
                        <br>

                <button type="submit" class="btn btn-primary btn-lg">Enregistrer</button>
            </form>
        </div>
    </div>
</div>

@endsection
