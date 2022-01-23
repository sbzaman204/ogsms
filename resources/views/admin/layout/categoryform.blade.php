@extends('admin.master')


@section('content')
@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
@foreach($errors->all() as $er)
    <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif

<form action="{{route('category.store')}}" method='post'>
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category name</label>
    
    <input name="category_name" type="string" class="form-control"required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category description</label>
    <input name="category_description" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category status</label>
    <input name="category_status" type="text" class="form-control" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
