@extends('admin.master')


@section('content')
<a class="btn btn-primary" href="{{route('product.form')}}">Add product iteams</a>
@csrf
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category id</label>
    <input name="category_id" type="integer" class="form-control"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product name</label>
    <input name="product_name" type="string" class="form-control"required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product price</label>
    <input name="product_price" type="digit" class="form-control"required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product quantity</label>
    <input name="product_quantity" type="integer" class="form-control"required>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product description</label>
    <input name="product_description" type="text" class="form-control"required>
  </div> <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">product image</label>
    <input name="product_image" type="file" class="form-control"required>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
