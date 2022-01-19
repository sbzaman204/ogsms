@extends('website.index')

@section('contents')
 
<section id="cart_items">
    <div class="container">
        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12" style="float:right">
                    <div class="bill-to">
                        <p style="margin-bottom: 50px;">Please Fill this form....</p>
                        <div class="form-one" style="width: 60%;">
                            <form method="post" action="{{route('add.shipping')}}">
                                @csrf
                                <div class="form-group">
                                    <label style="font-weight: bold;">Email:</label>
                                    <input class="form-control" type="email" placeholder="Enter Email Address" name="email">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Name:</label>
                                    <input class="form-control type="text" placeholder="Enter Name" name="name">
                                 </div>
									<div class="form-group">
                                        <label style="font-weight: bold;">Address:</label>
                                        <input class="form-control type="text" placeholder="Enter address" name="address">
                                    </div>
									<div class="form-group">
                                        <label style="font-weight: bold;">City:</label>
                                        <input class="form-control type="text" placeholder="Enter city" name="city">
                                    </div>
									<div class="form-group">
                                        <label style="font-weight: bold;">Phone Number:</label>
                                        <input class="form-control type="number" placeholder="Enter Phone Number" name="phone_number">
                                    </div>

                                    <div class="form-group">
                                        <label  style="font-weight: bold;" >Transaction id</label>
                                        <div class="controls">
                                            <input  type="text" id="transaction_id" name="transection_id"
                                                placeholder="" class="form-control">
                                        </div>
                                    </div>
								<div class="form-group" style="padding-bottom: 30px;">
                                    <label style="font-weight: bold;">Payment Method:</label>
                                    <select name="payment_method" id="payment_method" class="form-control">
                                        <option value="0">Select a payment method</option>
                                             
                                             <option value="cash on delivery">Cash On Delivery</option>
                                             <option value="Bkash">Bkash</option>

                                             
                                             
                                         </select>
                                </div>
                               

                                <button type="submit" class="btn btn-primary">Place order</button>
                            </form>
                        </div>
                    </div>
                </div>
                                
            </div>
        </div>
</section>







@endsection