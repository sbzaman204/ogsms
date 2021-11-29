@extends('admin.master')


@section('content')

<form action="{{route('category.store')}}" method='post'>
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category name</label>
    
    <input name="category_name" type="string" class="form-control"required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category description</label>
    <input name="category_description" type="text" class="form-control" required>
   
  
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
