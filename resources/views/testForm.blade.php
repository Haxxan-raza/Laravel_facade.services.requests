@extends('layout')
@section('content')

<h2>Data form</h2>

@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
  <form action="{{ url('testview.store') }}" method="post" enctype="multipart/form-data" >
    <div class="form-group">
    @csrf
    <input type="hidden" name="form_id"  value="{{ $alldata->id ?? ''}}">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" >
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <div class="custom-file">
    <input type="file" class="custom-file-input"  name ="image" id="image" value="" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Image Select... </label>
    @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('showrecord')}}" class="btn btn-primary">Show Record</a>
  </form>
@endsection