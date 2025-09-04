@extends('layout.app')

{{-- @section('title', 'Home Page') --}}

@section('content')
  
    <form action="{{route('update', ['identity'=>$id->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Student Name</label>
          <input type="text" name="sn" value="{{$id->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Age</label>
            <input type="number" name="sa" value="{{$id->age}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student City</label>
            <input type="text" name="sc" value="{{$id->city}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Image</label>
            <input type="file" name="si" value="{{$id->picture}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection