@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 100rem;">
                <div class="card-header">
                    Detail Menu Berita
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Judul Berita : </b>{{ $berita->title }}</li>
                        <li class="list-group-item"><b>Konten Berita : </b>{{ $berita->content }}</li>
                        <li class="list-group-item"><b>Konten Berita : </b><img width="150px" src="{{asset('storage/'.$berita->image)}}"></li>
                    </ul>
                </div>
                <a class="btn btn-success" href="{{ route('menuberita.index') }}">Kembali</a> 
            </div>
        </div>
    </div>
@endsection
