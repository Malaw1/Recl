@extends('layouts.app')

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20 float-left">Suivi des reclamations</h4>
        <a href="{{ route('reclamation.create') }}" class="btn btn-primary float-right">Nouvelle reclamation</a>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Pharmacie</th>
                    <th>Segment</th>
                    <th>Motif</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Date</th>
                    <th>Pharmacie</th>
                    <th>Segment</th>
                    <th>Motif</th>
                    <th>Status</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($rec as $collecteur)
                <tr>
                    <td>{{ $collecteur->date }}</td>
                    <td>{{ $collecteur->nom_client }}</td>
                    <td>{{ $collecteur->segment }}</td>
                    <td>{{ $collecteur->motif }}</td>
                    <td>
                        <a href="{{ url('reclamation/'.$collecteur->id.'/edit') }}" class="btn btn-action btn-secondary">{{ $collecteur->status }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

