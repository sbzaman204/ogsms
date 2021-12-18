
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand " href="#"><img src="image/navbar-logo.png" alt="..." /></a>
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
                <li class="nav-item"><a class="nav-link" href="{{route('user.showproduct')}}">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.showcategory')}}">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#orderdetails">orderdetails</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                @if(auth()->user())

                <li class="nav-item"><a class="nav-link" href="{{route('user.logout')}}">Log Out</a></li>
                @else

                <li class="nav-item"><a class="nav-link" href="{{route('user.registration')}}">Registration</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.login')}}">Log In</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>