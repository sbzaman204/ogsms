@extends('admin.master')

@section('content')



{{-- invoice css --}}

<style type="text/css">
  body{
      margin-top:20px;
      color: #484b51;
  }
  .text-secondary-d1 {
      color: #728299!important;
  }
  .page-header {
      margin: 0 0 1rem;
      padding-bottom: 1rem;
      padding-top: .5rem;
      border-bottom: 1px dotted #e2e2e2;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -ms-flex-align: center;
      align-items: center;
  }
  .page-title {
      padding: 0;
      margin: 0;
      font-size: 1.75rem;
      font-weight: 300;
  }
  .brc-default-l1 {
      border-color: #dce9f0!important;
  }
  
  .ml-n1, .mx-n1 {
      margin-left: -.25rem!important;
  }
  .mr-n1, .mx-n1 {
      margin-right: -.25rem!important;
  }
  .mb-4, .my-4 {
      margin-bottom: 1.5rem!important;
  }
  
  hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0,0,0,.1);
  }
  
  .text-grey-m2 {
      color: #888a8d!important;
  }
  
  .text-success-m2 {
      color: #86bd68!important;
  }
  
  .font-bolder, .text-600 {
      font-weight: 600!important;
  }
  
  .text-110 {
      font-size: 110%!important;
  }
  .text-blue {
      color: #478fcc!important;
  }
  .pb-25, .py-25 {
      padding-bottom: .75rem!important;
  }
  
  .pt-25, .py-25 {
      padding-top: .75rem!important;
  }
  .bgc-default-tp1 {
      background-color: rgba(121,169,197,.92)!important;
  }
  .bgc-default-l4, .bgc-h-default-l4:hover {
      background-color: #f3f8fa!important;
  }
  .page-header .page-tools {
      -ms-flex-item-align: end;
      align-self: flex-end;
  }
  
  .btn-light {
      color: #757984;
      background-color: #f5f6f9;
      border-color: #dddfe4;
  }
  .w-2 {
      width: 1rem;
  }
  
  .text-120 {
      font-size: 120%!important;
  }
  .text-primary-m1 {
      color: #4087d4!important;
  }
  
  .text-danger-m1 {
      color: #dd4949!important;
  }
  .text-blue-m2 {
      color: #68a3d5!important;
  }
  .text-150 {
      font-size: 150%!important;
  }
  .text-60 {
      font-size: 60%!important;
  }
  .text-grey-m1 {
      color: #7b7d81!important;
  }
  .align-bottom {
      vertical-align: bottom!important;
  }
  
  </style>
  {{-- end invoice css --}}
  
  {{--  invoice html --}}
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  
  <div class="page-content container">
      <div class="page-header text-blue-d2">
          
  
          <div class="page-tools">
              <div class="action-buttons">
                  
              </div>
          </div>
      </div>
      <button style="float: right; background-color:#478fcc; color: white; font-weight: bold; margin-bottom: 20px;" class="btn btn success" type="submit" onclick="PrintDiv('print');" value="Print">Print</button>


      <div id="print">
          {{-- start for removing the url from pdf --}}
          <style type="text/css" media="print">
            @page{
                size: auto;
                margin:0;
            }
          </style>
        {{-- end --}}
        
      <div class="container px-0">
          <div class="row mt-4">
              <div class="col-12 col-lg-12">
                  <div class="row">
                      <div class="col-12">
                          <div class="text-center text-150">
                              <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                              <span class="text-default-d3">Moon Shop</span>
                          </div>
                      </div>
                  </div>
                  <!-- .row -->
  
                  <hr class="row brc-default-l1 mx-n1 mb-4" />
  
                  <div class="row">
                      <div class="col-sm-6">
                          

                          </div>
                      </div>
                      <!-- /.col -->
  
                      <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                          <hr class="d-sm-none" />
                          <div class="text-grey-m2">
                              <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                  Invoice
                              </div>
  
  
  
                          </div>
                      </div>
                      <!-- /.col -->
                  </div>

                 

              <div class="table-responsive">
                  <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                      <thead class="bg-none bgc-default-tp1">
                          <tr class="text-white">
                              <th class="opacity-2">order id</th>
                              {{-- <th>product id</th> --}}
                              <th>product name</th>
                              <th>quantity</th>
                              <th>Unit Price</th>
                              <th width="140">Total</th>
                              <th>Delivery Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
  
                      <tbody> 
                        @foreach($order_data as $a)
                           <tr>
                             <td>{{$a->order_id }}</td> 
                             {{-- <td>{{$a->product_id  }}</td> --}}
                             <td>{{$a->product_name }}</td> 
                       
                             <td>{{ $a->product_quantity }}</td>
                             <td>{{ $a->unit_price }}</td>
                             <td>{{$a->sub_total  }}</td>
                             <td>{{$a->status  }}</td>
                             <td> <form action="{{route('order.update',$a->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <select class="form-control" name="status">
                              
                                <option value="processed">Processed</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="delivered">Delivered</option>
                              
                                </select>
                                <button class="btn btn-primary">Update</button>
                            </form></td>
                           </tr>
                           @endforeach
                           
                           
                         </tbody>
                  </table>
              </div>
          </div>
                      </div>
                      
                       </table>
  
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  {{--  end invoice html --}}
  
  @endsection

  <script language="javascript">
      function PrintDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }




  </script>
  
  
  
  
  
  
  
  
  
  
  










{{-- <h1>Order Details</h1>



 

<a href="{{ route('orderdetails.form') }}" class="btn btn-success">Order details</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">order id</th> 
       <th scope="col">product id</th>
      <th scope="col">product name</th>
      <th scope="col">product quantity</th>
      <th scope="col">unit price</th>
      <th scope="col">subt total</th>

    </tr>
  </thead> --}}
   <tbody> 
 @foreach($order_data as $a)
    <tr>
      <td>{{$a->order_id }}</td> 
      <td>{{$a->product_id  }}</td>
      <td>{{$a->product_name }}</td> 

      <td>{{ $a->product_quantity }}</td>
      <td>{{ $a->unit_price }}</td>
      <td>{{$a->sub_total  }}</td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>






