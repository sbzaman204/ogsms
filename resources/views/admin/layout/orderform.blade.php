@extends('admin.master')

@section('content')
<form action="{{route('order.store')}}" method='post'>
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">customer id</label>
      <input name="customer_id" type="number" class="form-control"required>
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">total</label>
      <input name="total" type="number" class="form-control"required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">order date</label>
        <input name="order_date" type="date" class="form-control"required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">order status</label>
        <input name="order_status" type="text" class="form-control"required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">order number</label>
        <input name="order_number" type="number" class="form-control"required>
      </div>
      
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  



@endsection