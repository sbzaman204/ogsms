@extends('website.index')

@section('contents')

<div class="container">
    <div class="text-center" style="margin-bottom: 5rem;">
        <h2 class="section-heading text-uppercase">Category</h2>
        <ul style="display: flex; width:60%; margin: auto;">
            @foreach($category as $data)
            <a class="btn btn-success" href="{{ route('categorywiseproduct',$data->id) }}" style="list-style: none; margin-right:20px;">{{ $data->category_name }}</a>
           
            @endforeach

        </ul>
        {{-- <h3 class="section-subheading text-muted">See our product details & place order</h3> --}}
    </div>
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Product</h2>
        <h3 class="section-subheading text-muted">See our product details & place order</h3>
    </div>
    <div class="row">

        @foreach($categoryWiseProduct as $data)
        <div class="col-lg-4">
            <div class="team-member">
                <img class="mx-auto rounded-circle" src="{{url('/uploads/'.$data->product_image)}}" alt="..." />
                <h4>{{ $data->product_name }}</h4>
                <p class="text-muted">Details</p>
                <button class="btn btn-success">Order Now</button>
            </div>
        </div>
        @endforeach
        {{-- new --}}


    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
    </div>
</div>




@endsection