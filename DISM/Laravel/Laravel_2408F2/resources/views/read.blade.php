@extends('layout.app')

{{-- @section('title', 'Home Page') --}}

@section('content')

      <table class="table">
        <tr>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Student City</th>
            <th>Student Picture</th>
            <th>Action</th>
        </tr>

        @foreach ($fet as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->city}}</td>
                <td><img src="uploads/{{$item->picture}}" alt="" width="100px"></td>
                <td>
                  <a href="{{route('editing', ['id'=>$item->id])}}" class="btn btn-warning">Edit</a>
                  <a href="{{route('delete', ['id'=>$item->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
      </table>

@endsection