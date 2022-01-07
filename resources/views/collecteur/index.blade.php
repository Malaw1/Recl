@extends('layouts.app')

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20 float-left">Listes des collecteurs</h4>
        <a href="{{ route('collecteurs.create') }}" class="btn btn-primary float-right">Nouveau Collecteur</a>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Matricule</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($collect as $collecteur)
                <tr>
                    <td>{{ $collecteur->matricule }}</td>
                    <td>{{ $collecteur->prenom }}</td>
                    <td>{{ $collecteur->nom }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

