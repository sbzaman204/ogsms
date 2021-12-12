@extends('admin.master')

@section('content')

<h1>Order List</h1>

<a class="btn btn-primary" href="{{route('order.form')}}">Add order iteams</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">customer id</th>
      <th scope="col">total</th>
      <th scope="col">order date</th>
      <th scope="col">order status</th>
      <th scope="col">order number</th>


    </tr>
  </thead>
  <tbody>
    @foreach($order as $data)
    <tr>
      <th scope="row">{{$data->customer_id}}</th>
      <td>{{$data->total}}</td>
      <td>{{$data->order_date}}</td>
      <td>{{$data->order_status}}</td>
      <td>{{$data->order_number}}</td> 

    </tr>
    @endforeach
      
    
    
    
  </tbody>
</table>




@endsection