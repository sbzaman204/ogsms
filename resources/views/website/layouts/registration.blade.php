@extends('website.index')

@section('contents')

<div class="myform">
    <div class="wrapper">
        <header>Registration Info</header>
        <form action="{{route('user.do.registration')}}" method='post'>
          @csrf
          <div class="dbl-field">
              
            <div class="field">
                {{-- <h2>name:</h2> --}}
              <input type="text" name="name" placeholder="Enter your name">
              <i class='fas fa-user'></i>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Enter your email">
              <i class='fas fa-envelope'></i>
            </div>
          </div>
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="password" placeholder="Enter your password">
              <i class='fas fa-phone-alt'></i>
            </div>
            {{-- <div class="field">
              <input type="text" name="website" placeholder="Enter your website">
              <i class='fas fa-globe'></i>
            </div> --}}
          {{-- </div>
          <div class="message">
            <textarea placeholder="Write your message" name="message"></textarea>
            <i class="material-icons">message</i>
          </div> --}}
          <div class="border-top card-body text-center">
            <button type="submit">Registration</button>
            <span></span>
          </div>
        </form>
        
        <div class="border-top card-body text-center">Have an account?<a href="{{route('user.login')}}">Log In</a></div>

    </div>
</div>

@endsection