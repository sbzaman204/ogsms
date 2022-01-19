
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <style> 
        * 
            body {
            background: #f5f5f5
        }
        
        .rounded {
            border-radius: 1rem
        }
        
        .nav-pills .nav-link {
            color: #555
        }
        
        .nav-pills .nav-link.active {
            color: white
        }
        
        input[type="radio"] {
            margin-right: 5px
        }
        
        .bold {
            font-weight: bold
        }
        
        
        
    </style>
        
        
        <div class="container py-5">
            <!-- For demo purpose -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-6">Bootstrap Payment Forms</h1>
                </div>
            </div> <!-- End -->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                                    
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form action="{{ route('user.payment.post',$id) }}" role="form" onsubmit="event.preventDefault()">
                                       @csrf
                                        <div class="form-group"> <label for="username">
                                                <h6>Card Holder's Name</h6>
                                            </label> <input value={{auth()->user()->name}} type="text" id="username" name="username"
                                            placeholder="" class="input-xlarge">
            </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Payment Mathod</h6>
                                            </label>
                                            <div class="controls">
                                                <select name="payment_mathod" class="form-control" id="exampleFormControlSelect1">
                                                  
                                                   <option>Bkash</option>
                                                    <option>Rocket</option>
                                                    <option>Nogod</option>
                                                    
                                                </select>
                                            </div>
                   
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="username">Transaction id</label>
                                            <div class="controls">
                                                <input  type="text" id="transaction_id" name="transaction_id"
                                                    placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                   
                                        <div class="control-group">
                                            <label class="control-label" for="username">Amount</label>
                                            <div class="controls">
                                                <input  type="number" id="amount" name="amount"
                                                    placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-success">Pay Now</button>
                                            </div>
                                        </div>
                
                   
                                       
                                    </form>
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>







