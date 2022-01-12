@extends('website.index')

@section('contents')

<section id="cart_items">

  <div class="container">
          
@if(session()->has('message'))
  <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
  @foreach($errors->all() as $er)
      <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif


    <div class="table-responsive cart_info">
      <table class="table table-condensed">
        <thead>
          <tr class="cart_menu">
            <td class="image">Item</td>
            <td class="description">Name</td>
            <td class="price">Price</td>
            <td class="quantity">Quantity</td>
            <td class="total">Total</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          
        @foreach(session()->get('cart')??[] as $key=>$data)

          <tr>
            <td class="cart_product">
              <a href=""><img src="{{url('uploads/'.$data['image'])}}" alt="" width="75px" height="75px"></a>
            </td>
            <td class="cart_description">
              <h4><a href="">{{$data['name']}}</a></h4>
              
            </td>
            <td class="cart_price">
              <p>{{$data['price']}} BDT</p>
            </td>
            
            <td class="cart_quantity">
            <form method="post" action="{{route('cart.update',$key)}}">

              @csrf
              @method('PUT')
              <div class="cart_quantity_button">
                
                <input class="cart_quantity_input"style="width: 80px;"
                type="number" name="quantity" min="1"  value="{{$data['quantity']}}">
                <button type="submit" style="margin-left:20px;" class="cart_quantity_update"><i class="fas fa-sync"></i></button>
              </div>
            </form>
            </td>
            <td class="cart_total">
              <p class="cart_total_price">{{$data['quantity']*$data['price']}} BDT</p>
            </td>
            
            <td class="cart_delete">
              <a style="background-color: red;" class="cart_quantity_delete" href="{{route('cart.remove',$key)}}"><i class="fa fa-times"></i></a>
            </td>
          </tr>
        

          
              
          @endforeach
          
          
        </tbody>
      </table>
    </div>
  </div>
  </section> 
  
  <section id="do_action">
  <div class="container">
    <div class="row">			
      <div class="col-md-6">
        <div class="total_area">
          <ul>
            <li><span style="font-weight: bold;">Cart Sub Total:</span> <span style="padding-left: 25px;">BDT{{$total}}</span></li>
							<li><span style="font-weight: bold;">Delivery Charge:</span> <span style="padding-left: 25px;">BDT 60</span></li>
							<li><span style="font-weight: bold;">Shipping Cost:</span> <span style="padding-left:25px;">Free</span></li>
							<li><span style="font-weight: bold;">Total:</span> <span style="padding-left: 80px;">BDT {{$total+60}}</span></li>
          </ul>
            <a class="btn btn-primary" href="{{ route('checkoutShow') }}">Check Out</a>
        </div>
      </div>
    </div>
  </div>
</section><!--/#do_action-->

@endsection