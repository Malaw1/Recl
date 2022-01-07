@extends('layouts.app')

@section('content')
<div class="container">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="card">
        <h5 class="card-header">Reclamation N°: {{ $rec->id }}</h5>
        <div class="card-body">
            <form  method="POST">
                @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="">Date</label>
                                <input type="date" class="form-control" required  placeholder="Date de reception" value="{{ $rec->date }}" name="date" disabled>
                            </div>
                            <div class="col">
                                <label for="">Code Client</label>
                                <input type="number" class="form-control" required placeholder="Code Client" value="{{ $rec->code_client }}" disabled name="code_client">
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
                                <select class="form-control" id="" name="motif" disabled value="{{ $rec->motif }}">
                                    <option>{{ $rec->motif }}</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="col">
                                <label for="">Commentaire</label>
                                <textarea disabled class="form-control" id="" cols="30" rows="10" >{{ $rec->commentaire }}</textarea>
                            </div>
                            <div class="col">
                                <label for="">Status</label>
                                <select class="form-control" id="" name="status" disabled>
                                    <option value="">{{ $rec->status }}</option>
                                </select>
                            </div>
                            
                        </div>
                        <br>

               
            </form>
        </div>
    </div>
</div>

@endsection
