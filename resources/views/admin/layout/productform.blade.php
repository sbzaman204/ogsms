@extends('admin.master')


@section('content')
{{-- <a class="btn btn-primary" href="{{route('product.form')}}">Add product iteams</a> --}}
<div class="container" style="margin-top: 20px;">
<form action="{{ route('product.store') }}" method='post' enctype="multipart/form-data">
  @csrf
  {{-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">category id</label>
    <input name="category_id" type="integer" class="form-control"required>
  </div> --}}
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">product id</label>
  <select name="product_id" class="form-select" aria-label="Default select example">
    <option selected>Select Product Category</option>
    @foreach($products as $data)
    <option value={{ $data->id }}>{{ $data->product_id }}</option>
   @endforeach
  </select>
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
</div> <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">product status</label>
  <input name="product_status" type="text" class="form-control"required>
</div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection
