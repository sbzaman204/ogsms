@extends('admin.master')

@section('content')

<h1>Order List</h1>
<td>{{$order->total}}</td>
      <p>{{$order->product_quantity}}</p>
      <p>{{$order->subtotal}}</p>
      <p>{{$order->unit_price}}</p>
      <p>{{$order->order_status}}</p>


@endsection