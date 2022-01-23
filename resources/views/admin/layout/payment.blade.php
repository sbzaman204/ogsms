@extends('admin.master')

@section('content')

<h1>Payment Details</h1>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Transection Id</th>
      <th scope="col">Grant Total</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Date</th>
      

 


      
    </tr>
  </thead>
  <tbody>
    @foreach($details as $detail)
    <tr>
      <td>{{$detail->order_id}}</td>
      <td>{{$detail->transection_id}}</td>
      <td>{{$detail->grant_total}}</td>
      <td>{{$detail->payment_method}}</td>
      <td>{{($detail->created_at)->toDateString()}}</td> 
      
    </tr>
    @endforeach
  </tbody>

@endsection
