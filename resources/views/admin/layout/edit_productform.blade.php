@extends('admin.master')


@section('content')

<form action="{{ route('product.update') }}" method='post'>
  @csrf
  <div class="mb-3">
    
    <input name="id" value="{{ $product->id }}" type="hidden" class="form-control"required>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product name</label>
    
    <input name="product_name" value="{{ $product->product_name }}" type="string" class="form-control"required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product price</label>
    <input name="product_price" value="{{ $product->product_price }}" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product quantity</label>
    <input name="product_quantity" value="{{ $product->product_quantity }}" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product description</label>
    <input name="product_description" value="{{ $product->product_description}}" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input name="image" type="file" class="form-control" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection