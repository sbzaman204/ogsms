@extends('admin.master')

@section('content')

<h1>Order List</h1>

<a  href="{{route('order.form')}}"></a>


{{-- //search --}}
<form action="{{ route('order') }}">
  <div class="input-group">
    <div class="form-outline">
      <input  type="text" name="search" class="form-control" placeholder="enter search">
    </div>
    <button type="submit" class="btn btn-primary">
   submit
    </button>
  </div>
  
</form>
 {{-- //search End --}}


<table class="table">
  <thead>
    <tr>
      <th scope="col">User Email</th>
      {{-- <th scope="col">Product ID</th> --}}
      <th scope="col">Order Number</th>
      <th scope="col">Order Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($order as $data)
    <tr>
      <th scope="row">{{$data->orderRelation->email}}</th>
      {{-- <td>{{($data->productRelation->product_name)}}</td> --}}
      <td>{{($data->order_number)}}</td>
      <td>{{($data->order_date)}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('order.view',$data->id)}}">View</a>
      </td> 
    </tr>
    @endforeach      
  </tbody>
</table>
@endsection