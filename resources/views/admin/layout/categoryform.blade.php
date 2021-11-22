@extends('admin.master')


@section('content')

<form action="{{route('category.store')}}" method='post'>
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Code</label>
    <input name="product_code" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product type</label>
    <input name="product_price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Description</label>
    <input name="product_description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div> --> 
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
