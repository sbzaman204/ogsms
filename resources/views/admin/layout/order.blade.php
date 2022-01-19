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
      <th scope="col">#SL</th>
      <th scope="col">user Name</th>

      <th scope="col">User Email</th>
      {{-- <th scope="col">Product ID</th> --}}
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($order as $key=>$data)
    <tr>
      <td>{{ $key+1 }}</td>
      <td scope="row">{{$data->orderRelation->name}}</th>
       <td>{{ $data->email }}</td>
      <td>{{($data->address)}}</td>
      <td>{{($data->city)}}</td>
      <td>{{($data->phone_number)}}</td>


      <td>
        <a class="btn btn-primary" href="{{route('order.view',$data->id)}}">View</a>
      </td> 
    </tr>
    @endforeach      
  </tbody>
</table>
@endsection