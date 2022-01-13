@extends('website.index')

@section('contents')
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Products</h2>
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
        </div>
        <div class="row">
            @foreach($products as $data)

            <div class="col-lg-4">
                <div class="team-member">
                    <a href="{{ route('productDetails',$data->id) }}"><img class="mx-auto rounded-circle" src="{{url('/uploads/'.$data->product_image)}}" alt="..." /></a>
                    <h4>{{ $data->product_name }}</h4>
                    <p class="text-muted">Details</p>
                    <button class="btn btn-success">Order Now</button>
                </div>
            </div>
        @endforeach

        </div>

    </div>
</section>
@endsection