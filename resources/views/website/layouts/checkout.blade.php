@extends('website.index')

@section('contents')
 
<section id="cart_items">
    <div class="container">
        <div class="shopper-informations">
            <div class="row ">
                <div class="col-sm-12" style="float:right">
                    <div class="bill-to">
                        <p style="margin-bottom: 50px;">Please Fill this form....</p>
                        <div class="form-one">
                            <form method="post" action="{{route('add.shipping')}}">
                                @csrf
                                <input type="integer" placeholder="user_id" name="user_id">
                                <input type="integer" placeholder="product_id" name="product_id">
                                <input type="integer" placeholder="order_number" name="order_number">
                                <input type="date" placeholder="order_date" name="order_date">
                                <select name="payment_method" id="payment_method" class="form-control">
                               <option value="0">Select a payment method</option>
                                    
                                    <option>Cash On Delivery</option>
                                    
                                    
                                </select>

                                <button type="submit" class="btn btn-primary">Place order</button>
                            </form>
                        </div>
                    </div>
                </div>
                                
            </div>
        </div>
</section>







@endsection