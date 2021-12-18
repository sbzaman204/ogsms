@extends('website.index')

@section('contents')
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Categories</h2>
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
        </div>
        <div class="row">
            @foreach($categories as $data)

            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                       
                    </a>
                    <div class="portfolio-caption">
                        {{-- <img class="img-fluid" src="{{url('/uploads/'.$data->product_image)}}" style="height:300px;" alt="product_image"> --}}
                        <div class="portfolio-caption-heading">{{$data->category_name}}</div>
                        <div class="portfolio-caption-subheading text-muted">{{$data->category_description}}</div>  
                        <div class="portfolio-caption-subheading text-muted">{{$data->category_status}}</div>
                    </div>
                </div>
            </div>  
        @endforeach

        </div>

    </div>
</section>
@endsection