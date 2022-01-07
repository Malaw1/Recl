@extends('layouts.app')

@section('content')
<div class="container">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="card">
        <h5 class="card-header">Nouvelle Reclamation</h5>
        <div class="card-body">
            <form action="{{ route('reclamation.store')}}" method="POST">
                @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="">Date</label>
                                <input type="date" class="form-control" required  placeholder="Date de reception" id="prenom" name="date">
                            </div>
                            <div class="col">
                                <label for="">Code Client</label>
                                <input type="number" class="form-control" required placeholder="Code Client" id="nom" name="code_client">
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Segment</label>
                                <select class="form-control" id="" name="segment">
                                    <option value="Gold">Gold</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Bronze">Bronze</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Motif</label>
                                <select class="form-control" id="" name="motif">
                                    <option value="Livré en trop">Livré en trop</option>
                                    <option value="Inversion produits">Inversion produits</option>
                                    <option value="Facturé non livré">Facturé non livré</option>
                                    <option value="Duplicata BL ">Duplicata BL </option>
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
