@extends('admin.master')
@section('content')

<h1>User details </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $a)
    <tr>
      <td>{{ $a->name }}</td>
      <td>{{ $a->email }}</td>

    </tr>
    @endforeach
  </tbody>
</table>




@endsection