@extends('admin.master')

@section('content')

<h1>Category List</h1>

 <a href="{{route('category.form')}}" class="btn btn-success">Submit your data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">category name</th>
      <th scope="col">category description</th>
      
    
    </tr>
  </thead>
  <tbody>
    @foreach($category as $data)
    <tr>
      <th scope="row">{{$data->category_name}}</th>
      <td>{{$data->category_description}}</td>
      
      
    </tr>
    @endforeach
    
  </tbody>
</table>




@endsection