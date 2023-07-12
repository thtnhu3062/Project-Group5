@extends('admin.layout.layout')
@include('sweetalert::alert')
@section('contents')
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Customer's information</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div id="table" class="table-editable">
                     <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>{{$customer->customer_name}}</td>
                              <td>{{$customer->customer_email}}</td>
                              <td>{{$customer->customer_phone}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Shipping Information</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div id="table" class="table-editable">
                     <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Adress</th>
                              <th>Phone</th>
                              <th>Note</th>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <td>{{$shipping->shipping_name}}</td>
                              <td>{{$shipping->shipping_address}}</td>
                              <td>{{$shipping->shipping_phone}}</td>
                              <td>{{$shipping->shipping_phone}}</td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Order details</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div id="table" class="table-editable">
                     <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                           <tr>
                           <th>Ordinal numbers</th>
                              <th>Product name</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <tbody>
                        @php
                           $i=0;
                           $total=0;
                           @endphp
                           @foreach($order_details as $key => $details)
                           @php
                           $i++;
                           $sub=$details->product_price*$details->product_sales_quantity;
                           $total+=$sub;
                           @endphp
                           <tr>
                               <td>{{$i}}</td>
                              <td>{{$details->product_name}}</td>
                              <td>{{$details->product_sales_quantity}}</td>
                              <td>{{$details->product_price}}$</td>
                              <td>{{$details->product_price*$details->product_sales_quantity}}$</td>
                           </tr>
                        @endforeach
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>Subtotal: {{$total}}$</td>
                        </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection