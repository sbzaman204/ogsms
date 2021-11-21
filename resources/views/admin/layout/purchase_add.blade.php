@extends('admin.master')

@extends('admin.master')
<form action="{{route('purchase.store')}}"method='post'>
    @csrf
  
  <div class="form-group">
    <label for="exampleInputPassword1">Product code</label>
    <input type="number" name="product_code" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">product name</label>
    <input type="text" name="product_name" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">order date</label>
    <input type="date" name="order_date" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">quantity</label>
    <input type="number" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection