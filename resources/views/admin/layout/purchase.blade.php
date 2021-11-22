@extends('admin.master')

@section('content')

<h1>purchase List</h1>

<a href="{{route('purchase.add')}}" class="btn btn-primary">add new product</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">product code</th>
      <th scope="col">product name</th>
      <th scope="col">order date</th>
      <th scope="col">quantity</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>




@endsection