@extends('admin.master')

@section('content')

<h1>Order List</h1>

<a class="btn btn-primary" href="{{route('order.form')}}">Add order iteams</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">Order Number</th>
      <th scope="col">Order Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($order as $data)
    <tr>
      <th scope="row">{{$data->customer_id}}</th>
      <td>{{($data->customer_id)}}</td>
      <td>{{($data->product_id)}}</td>
      <td>{{($data->order_number)}}</td>
      <td>{{($data->order_date)}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('order.view',$order->id)}}">View</a>
      </td> 
    </tr>
    @endforeach      
  </tbody>
</table>
@endsection