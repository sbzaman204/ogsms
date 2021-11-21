@extends('admin.master')

@section('content')
<a href="{{route('purchase.add')}}" class="btn btn-primary">add new product</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>




@endsection