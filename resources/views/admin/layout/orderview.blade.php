@extends('admin.master')

@section('content')

<h1>Order List</h1>
<td>{{$data->total}}</td>
      <p>{{$data->product_quantity}}</p>
      <p>{{$data->subtotal}}</p>
      <p>{{$data->unit_price}}</p>
      <p>{{$data->order_status}}</p>


@endsection