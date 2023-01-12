@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 100rem;">
                <div class="card-header">
                    Detail Menu Contact
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>name : </b>{{ $contact->name }}</li>
                        <li class="list-group-item"><b>Kritik & Saran : </b>{{ $contact->kritik_saran }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('menucontact.index') }}">Kembali</a> 
            </div>
        </div>
    </div>
@endsection
