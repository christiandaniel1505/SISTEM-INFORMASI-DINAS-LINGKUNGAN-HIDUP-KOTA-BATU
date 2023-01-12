@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Contact
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('menucontact.update', $contact->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $contact->name }}" aria-describedby="name" ></input>
            </div>
                <div class="form-group">
                    <label for="kritik_saran">Kritik & Saran</label>
                    <input type="text" name="kritik_saran" class="form-control" id="kritik_saran" value="{{ $contact->kritik_saran }}" aria-describedby="kritik_saran" ></input>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update Contact</button>
            </form>
            </div>
            <a class="btn btn-success" href="{{ route('menucontact.index') }}">Kembali</a> 
        </div>
    </div>
</div>
@endsection
