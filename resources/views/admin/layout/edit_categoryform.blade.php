@extends('admin.master')


@section('content')

<form action="{{ route('category.update') }}" method='post'>
  @csrf
  <div class="mb-3">
    
    <input name="id" value="{{ $category->id }}" type="hidden" class="form-control"required>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category name</label>
    
    <input name="category_name" value="{{ $category->category_name }}" type="string" class="form-control"required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category description</label>
    <input name="category_description" value="{{ $category->category_description }}" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category status</label>
    <input name="category_status" value="{{ $category->category_status }}" type="text" class="form-control" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection
