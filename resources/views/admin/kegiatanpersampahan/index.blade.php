@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Menu Data</h2>
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('kegiatanpersampahan.create') }}"> Input Data</a>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>Gambar</th>
            <th>Judul gambar</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($persampahan as $data)
        <tr>
            <td><img width="150px" src="{{asset('storage/'.$data->image)}}"></td>
            <td>{{ $data->title_image }}</td>
            <td>{{ $data->content}}</td>
            <td>
                <form action="{{ route('kegiatanpersampahan.destroy',$data->id) }}" method="POST">
                    <a class="btn btn-info" id="show_galeri1" href="{{ route('kegiatanpersampahan.show',$data->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('kegiatanpersampahan.edit',$data->id) }}">Edit</a>
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