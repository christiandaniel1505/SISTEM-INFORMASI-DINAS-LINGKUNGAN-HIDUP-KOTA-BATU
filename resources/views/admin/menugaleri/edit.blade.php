@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Galeri
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
            <form method="post" action="{{ route('menugaleri.update', $galeri->id) }}" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" class="form-control" id="image" aria-describedby="image1" value="{{$galeri->image}}" >
                    <img src="{{asset('storage/' . $galeri->image)}}" width="100px">
                </div>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title" value="{{$galeri->title}}"></input>
                </div>
                {{--  <div class="form-group">
                    <label for="text">Content</label>
                    <textarea type="text" id="summernote" rows="10" cols="10" name="content" class="form-control" id="content" aria-describedby="content">{!!$galeri->content!!}</textarea>
                </div>  --}}
                <button type="submit" class="btn btn-primary float-right">Update</button> 
            </form>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menugaleri.index') }}">Kembali</a>
        </div>
    </div>
</div>
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
@endsection