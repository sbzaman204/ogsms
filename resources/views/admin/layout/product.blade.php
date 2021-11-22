@extends('admin.master')

@section('content')

<button type="button" class="btn btn-success">Success</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">product code</th>
      <th scope="col">product name</th>
      <th scope="col">product price</th>
      <th scope="col">product unit</th>
      <th scope="col">product description</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rice</td>
      <td>70</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>oil</td>
      <td>600</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Onion</td>
      <td>70</td>
      <td>@twitter</td>
      <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>70</td>
      <td>@twitter</td>
    </tr>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">vegetables</td>
      <td>70</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection