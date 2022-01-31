
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item">
                     {{-- search bar --}}
                     <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">search</button>
                      </div>
                    {{-- end search bar --}}
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('user.showproduct')}}">Product</a></li>
                <li class="nav-item"><a class="nav-link" href=""></a></li>
               
                
                {{-- <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li> --}}
                @if(auth()->user())
                <li class="nav-item"><a class="nav-link" href="{{route('customer.profile')}}">Customer Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.logout')}}">Log Out</a></li>
                @else

                <li class="nav-item"><a class="nav-link" href="{{route('user.registration')}}">Registration</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.login')}}">Log In</a></li>
                

                @endif
                <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}">cart({{session('cart') ? count(session('cart')) : '0'}})</a></li>
            </ul>
        </div>
    </div>
</nav>