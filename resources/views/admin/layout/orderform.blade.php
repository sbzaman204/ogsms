@extends('admin.master')

@section('content')
<form action="{{route('order.store')}}" method='post'>
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">User ID</label>
      <input name="customer_id" type="number" class="form-control"required>
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Product ID</label>
      <input name="product_id" type="number" class="form-control"required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Order Number</label>
        <input name="order_number" type="number" class="form-control"required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Order Date</label>
        <input name="order_date" type="date" class="form-control"required>
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  



@endsection