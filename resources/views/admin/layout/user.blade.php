@extends('admin.master')
@section('content')

<h1>User details </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>

      <th scope="col">Action</th>

      
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $a)
    <tr>
      <td>{{ $a->name }}</td>
      <td>{{ $a->email }}</td>
      <td>{{ $a->role }}</td>

      <td>
      <a href="{{route('user.view',$a->id)}}" class="btn btn-success">View</a>
      <a href="{{route('user.delete',$a->id) }}" class="btn btn-success">Delete</a>

    </td>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection