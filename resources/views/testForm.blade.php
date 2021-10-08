@extends('layout')
@section('content')

<h2>Data form</h2>

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
  <form action="{{ url('testview.store') }}" method="post" enctype="multipart/form-data" >
    <div class="form-group">
    @csrf
    <input type="hidden" name="form_id"  value="{{ $alldata->id ?? ''}}">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $alldata->name ?? ''}}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" name="image" id="image" value="{{ $alldata->image ?? ''}}">
    @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="showrecord" class="btn btn-primary">Show Record</a>
  </form>
@endsection