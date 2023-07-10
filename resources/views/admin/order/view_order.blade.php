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
                     <h4 class="card-title">Customer's name</h4>
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
                              <td>{{$order_by_id->customer_name}}</td>
                              <td>{{$order_by_id->customer_email}}</td>
                              <td>{{$order_by_id->customer_phone}}</td>
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
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <td>{{$order_by_id->shipping_name}}</td>
                              <td>{{$order_by_id->shipping_address}}</td>
                              <td>{{$order_by_id->shipping_phone}}</td>
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
                              <th>Product name</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>{{$order_by_id->product_name}}</td>
                              <td>{{$order_by_id->product_sales_quantity}}</td>
                              <td>{{$order_by_id->product_price}}$</td>
                              <td>{{$order_by_id->order_total}}$</td>
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