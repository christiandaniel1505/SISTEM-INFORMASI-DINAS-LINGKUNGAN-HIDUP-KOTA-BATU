@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Menu Berita</h2>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('menuberita.create') }}"> Input Menu Berita</a>
            </div>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($berita as $berita)
        <tr>
            <td>{{ $berita->title }}</td>
            <td>{{ $berita->content }}</td>
            <td><img width="150px" src="{{asset('storage/'.$berita->image)}}"></td>
            <td>
                <form action="{{ route('menuberita.destroy', $berita->id) }}" method="POST">
                    <a class="btn btn-info" id="show_berita1" href="{{ route('menuberita.show', $berita->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menuberita.edit', $berita->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button> 
                </form>
            </td>
        </tr>
    @endforeach
</table>
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
@endsection
