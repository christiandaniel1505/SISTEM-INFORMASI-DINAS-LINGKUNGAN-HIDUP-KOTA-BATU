@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Detail Menu Galeri
            </div>
            @foreach ($galeri as $data)
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Gambar  : </b>
                    <br><img src="{{asset('storage/' . $galeri->image)}}" width="100px"></li>
                    <li class="list-group-item"><b>Judul : </b>{{$galeri->title}}</li>
                    {{--  <li class="list-group-item"><b>Content : </b>{{$galeri->content}}</li>  --}}
                </ul>
            </div>
            @endforeach
            <a class="btn btn-success mt-3" href="{{ route('menugaleri.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection