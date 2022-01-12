@extends('admin.master')

@section('content')

<h1>Category List</h1>

 <a href="{{route('category.form')}}" class="btn btn-success">Add product</a>
{{-- //search --}}
<form action="{{ route('category') }}">
  <div class="input-group">
    <div class="form-outline">
      <input  type="text" name="search" class="form-control" placeholder="enter search">
    </div>
    <button type="submit" class="btn btn-primary">
   submit
    </button>
  </div>
  
</form>
 {{-- //search End --}}
<table class="table">
  <thead>
    <tr>
      <th scope="col">category name</th>
      <th scope="col">category description</th>
        <th scope="col">category status</th>
        <th>Action</th>
      
    
    </tr>
  </thead>
  <tbody>
    @foreach($category as $data)
    <tr>
      <th scope="row">{{$data->category_name}}</th>
      <td>{{$data->category_description}}</td>
      <td>{{$data->category_status}}</td>
      <td>
        <a href="{{ route('category.view',$data->id) }}" class="btn btn-success">view</a>

        <a href="{{ route('category.edit',$data->id) }}" class="btn btn-success">Update &rarr;</a>
        <a href="{{ route('category.delete',$data->id)}}" class="btn btn-danger">Delete</a>
      </td>

      
      
    </tr>
    @endforeach
    
  </tbody>
</table>




@endsection