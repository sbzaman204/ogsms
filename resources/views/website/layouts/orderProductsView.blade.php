<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="table-responsive">
        <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
            <thead class="bg-none bgc-default-tp1">
                <tr class="text-dark">
                    <th class="opacity-2">order id</th>
                    {{-- <th>product id</th> --}}
                    <th>product name</th>
                    <th>quantity</th>
                    <th>Unit Price</th>
                    <th width="140">Total</th>
                    <th>Delivery Status</th>
                
                </tr>
            </thead>
    
            <tbody> 
              @foreach($orderProducts as $a)
                 <tr>
                   <td>{{$a->order_id }}</td> 
                   {{-- <td>{{$a->product_id  }}</td> --}}
                   <td>{{$a->product_name }}</td> 
             
                   <td>{{ $a->product_quantity }}</td>
                   <td>{{ $a->unit_price }}</td>
                   <td>{{$a->sub_total  }}</td>
                   <td>{{$a->status  }}</td>
            
                 </tr>
                 @endforeach
                 
                 
               </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>







        