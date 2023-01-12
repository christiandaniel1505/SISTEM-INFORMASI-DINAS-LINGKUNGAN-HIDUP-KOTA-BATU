@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 100rem;">
                <div class="card-header">
                    Tambah Contact
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('menucontact.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label for="kritik_saran">Kritik & Saran</label>
                            <input type="text" name="kritik_saran" class="form-control" id="kritik_saran" aria-describedby="kritik_saran">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
                <a class="btn btn-success" href="{{ route('menucontact.index') }}">Kembali</a> 
            </div>
        </div>
    </div>
@endsection
