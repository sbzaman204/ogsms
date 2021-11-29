@extends('admin.master')

@section('content')

<h1>Product List</h1>

<!-- <button type="button" class="btn btn-success">Success</button> -->
<a class="btn btn-primary" href="{{route('product.form')}}">Add product iteams</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">category id</th>
      <th scope="col">product name</th>
      <th scope="col">product price</th>
      <th scope="col">product quantity</th>
      <th scope="col">product description</th>
      <th scope="col">product image</th>
    
    </tr>
  </thead>
  <tbody>   
    @foreach($product as $data)
    <tr>
      <th scope="row">{{$data->category_id}}</th>
      <td>{{$data->product_name}}</td>
      <td>{{$data->product_price}}</td>
      <td>{{$data->product_quantity}}</td>
      <td>{{$data->product_description}}</td>
      <td>{{$data->product_image}}</td>

    </tr> 
    @endforeach

  </tbody>
</table>


@endsection