@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Menu Contact</h2>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('menucontact.create') }}"> Input Menu Contact</a>
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
        <th>Nama</th>
        <th>Kritik & Saran</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($contact as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->kritik_saran}}</td>
            <td>
                <form action="{{ route('menucontact.destroy', $contact->id) }}" method="POST">
                    <a class="btn btn-info" id="show_contact" href="{{ route('menucontact.show', $contact->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('menucontact.edit', $contact->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button> 
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
