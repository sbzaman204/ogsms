@extends('admin.master')

@section('content')

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
@foreach($errors->all() as $er)
    <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif

<div class="container-fluid px-4">
    <h1 class="mt-4">Welcome Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
       <li class="breadcrumb-item active"></li>   
    </ol>
 



                    <div class="container-fluid px-4">
                        {{-- <h1 class="mt-4">Dashboard</h1> --}}
                        <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active"></li>   
                        </ol>
                       

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{ $category }}
                                        <a class="small text-white stretched-link" href="{{route('category')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">product</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{$product}}
                                        <a class="small text-white stretched-link" href="{{route('product')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">user</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{ $user }}
                                        <a class="small text-white stretched-link" href="{{route('user')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Order</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{ $order }}
                                        <a class="small text-white stretched-link" href="{{route('order')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                           
                             {{-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">order</div>
                                    {{$order}}
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('order')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> --}}
                             <div class="col-xl-3 col-md-6">
                                
                                </div>
                                    <div class="col-xl-3 col-md-6">
                                        
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
@endsection

