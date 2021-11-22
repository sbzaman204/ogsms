@extends('admin.master')

@section('content')

<h1>Category List</h1>

 <a href="{{route('category.form')}}" class="btn btn-success">Submit your data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Code</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product type</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($category as $data)
    <tr>
      <th scope="row">{{$data->product_code}}</th>
      <td>{{$data->product_name}}</td>
       <td>{{$data->product_type}}</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>




@endsection