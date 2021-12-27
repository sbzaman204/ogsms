@extends('website.index')

@section('contents')

<div class="myform">
    <div class="wrapper">
        <header>Log In Here</header>

        <form action="{{route('admin.do.login')}}" method='post'>
          @csrf
            
          <div class="dbl-field">
              
            
            <div class="field">
              <input type="text" name="email" placeholder="Enter your email">
              
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
        
        
    

  </div>
</div>

@endsection