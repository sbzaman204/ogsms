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
</center>