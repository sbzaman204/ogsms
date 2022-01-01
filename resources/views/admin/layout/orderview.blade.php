@extends('admin.master')

@section('content')

<h1>Order Details</h1>
<td>{{$data->total}}</td>
      <p>{{($data->customer_id)}}</p>
      <p>{{($data->product_id)}}</p>
      <p>{{($data->order_number)}}</p>
      <p>{{($data->order_date)}}</p>


@endsection