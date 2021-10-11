@extends('layout')
@section('content')
<h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
        
      <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td><img width="30%" class="img-circle" src="{{ asset('images/' . $data->image)}}" /></td>
        <td><a href="{{url('editrecord'.'/'.$data->id)}}" class="btn btn-primary">Edit </a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @endsection