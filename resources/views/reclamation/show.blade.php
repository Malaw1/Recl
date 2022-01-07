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
            <form action="{{ route('reclamation.update', $rec->id)}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                        <div class="form-row">
                            <div class="col">
                                <label for="">Date</label>
                                <input type="date" class="form-control" required  placeholder="Date de reception" value="{{ $rec->date }}" name="date">
                            </div>
                            <div class="col">
                                <label for="">Code Client</label>
                                <input type="number" class="form-control" required placeholder="Code Client" value="{{ $rec->code_client }}" name="code_client">
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Segment</label>
                                <select class="form-control" id="" name="segment" disabled>
                                    <option value="{{ $rec->segment }}" selected>{{ $rec->segment }}</option>
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

                        <div class="form-row">
                            <div class="col">
                                <label for="">Commentaire</label>
                                <textarea name="commentaire" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col">
                                <label for="">Status</label>
                                <select class="form-control" id="" name="status">
                                    <option value="En traitement">En traitement</option>
                                    <option value="Terminé ">Terminé</option>
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
