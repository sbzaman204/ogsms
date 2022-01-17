<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{--    
    <center>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img src="{{ url('/uploads/',auth()->user()->image)}}" alt="user" class="rounded-circle" width="150"><span ></span> </span></div>
                </div>
                <div>
                    <link rel="stytlesheet" href="{{ url('website/userprofile.css') }}">
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels" style="margin-right: 30px; font-weight: bold;">Name:</label><span>{{ auth()->user()->name }}</span></div>
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" value="" placeholder="Name"></div>
                        </div>
                        <div class="col-md-6"><label class="labels" style="margin-right: 30px; font-weight: bold;">Email</label><span>{{ auth()->user()->email}}</span></div>
                        <div class="col-md-6"><label class="labels">Email </label><input type="text" class="form-control" value="" placeholder="Email "></div>
                           
                            
                        </div>
                        
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
        </div>
        </div>
        </center> --}}


        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ asset('uploads/'.auth()->user()->image) }}"><span class="font-weight-bold">{{ auth()->user()->name }}</span><span class="text-black-50">{{ auth()->user()->email }}</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels" style="font-weight: bold;">Name :</label>
                                <input type="text" class="form-control" placeholder="enter email id" value={{ auth()->user()->name }}>
                            </div>
                        </div>
                        <div class="row mt-3">
                            
                            
                            
                            <div class="col-md-12"><label class="labels"  style="font-weight: bold;">Email :</label><input type="text" class="form-control" placeholder="enter email id" value={{ auth()->user()->email }}></div>
                            
                        </div>
                        <div class="row mt-3">
                            
                            
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">order number</th>
                <th scope="col">product name</th>
                <th scope="col">order date</th>
              </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
              <tr>
                <th scope="row">1</th>
                <td>{{ $order->id }}</td>
                <td>{{ $order->productRelation->product_name }}</td>
                <td>{{ $order->order_date }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>



