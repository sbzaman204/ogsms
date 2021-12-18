@extends('website.index')

@section('contents')

<div class="myform">
    <div class="wrapper">
        <header>Log In Here</header>

        <form action="{{route('user.do.login')}}" method='post'>
          @csrf
            
          <div class="dbl-field">
              
            
            <div class="field">
              <input type="text" name="email" placeholder="Enter your email">
              <i class='fas fa-envelope'></i>
            </div>
          </div>
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="password" placeholder="Enter your password">
              
            </div>
            
          </div>
          
          <div class="button-area">
            <button type="submit">Log In</button>
            <span></span>
          </div>
        </form>
        
        <div class="border-top card-body text-center">Have an account? <a href="{{route('user.registration')}}">Sign Up</a></div>

    </div>
</div>

@endsection