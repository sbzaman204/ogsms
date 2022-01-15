@extends('admin.master')

@section('content')
<form action="{{route('orderdetails.store')}}" method='post'>
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">order id</label>
      <input name="order_id" type="numder" class="form-control"required>
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">product id</label>
      <input name="product_id" type="number" class="form-control"required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">product name</label>
      <input name="product_name" type="string" class="form-control"required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">product quantity</label>
        <input name="quantity" type="number" class="form-control"required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">product price</label>
        <input name="unit_price" type="number" class="form-control"required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">sub total</label>
        <input name="sub_total" type="number" class="form-control"required>
      </div>
      
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  



@endsection