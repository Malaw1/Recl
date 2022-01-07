@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20 float-left">Listes des collecteurs</h4>
        <a href="{{ route('erreurs.create') }}" class="btn btn-primary float-right">Nouvelle erreur</a>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Nombre d'erreurs</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Matricule</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Nombre d'erreurs</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($collect as $collect)
                <tr>
                    <td>{{ $collect->matricule }}</td>
                    <td>{{ $collect->prenom }}</td>
                    <td>{{ $collect->nom }}</td>
                    <td>{{ $collect->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>
    </div>
</div>
@endsection
