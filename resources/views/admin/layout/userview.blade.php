@extends('admin.master')
@section('content')

<h1>User details </h1>
<p>{{ $data->name }}</p>
<p>{{ $data->email }}</p>
    

@endsection