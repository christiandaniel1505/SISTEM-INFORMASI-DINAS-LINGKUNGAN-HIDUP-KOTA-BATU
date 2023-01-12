@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Gambar  : </b>
                    <br><img src="{{asset('storage/' . $penataan->image)}}" width="100px"></li>
                    <li class="list-group-item"><b>Judul Gambar : </b>{{$penataan->title_image}}</li>
                    <li class="list-group-item"><b>Content : </b>{!!$penataan->content!!}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('kegiatanpenataan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection