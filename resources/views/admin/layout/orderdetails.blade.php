@extends('admin.master')

@section('content')

<a href="{{ route('orderdetails.form') }}" class="btn btn-success">Order details</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">order id</th>
      <th scope="col">product id</th>
      <th scope="col">product name</th>
      <th scope="col">product quantity</th>
      <th scope="col">product price</th>
      <th scope="col">subt total</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $a)
    <tr>
      <td>{{ $a->order_id }}</td>
      <td>{{$a->product_id  }}</td>
      <td>{{$a->product_name }}</td>

      <td>{{ $a->product_quantity }}</td>
      <td>{{ $a->product_price }}</td>
      <td>{{$a->sub_total  }}</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>




@endsection