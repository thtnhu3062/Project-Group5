@extends('admin.layout.layout')
@section('contents')
@include('sweetalert::alert')
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">List Order</h4>
                  </div>
                  <?php
                  $message = Session::get('message');
                  if ($message) {
                     echo '<span style="color:red;font-weight:bold" width ="100%">' . $message . '</span>';
                     Session::put('message', null);
                  }
                  ?>
               </div>
               <div class="iq-card-body">
                  <div id="table" class="table-editable">
                     <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                           <tr>
                              <th>Ordinal numbers</th>
                              <th>Order Code</th>
                              <th>Order Date</th>
                              <th>Display</th>
                              <th>Edit</th>
                              <th>Remove</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php
                           $i=0;
                           @endphp
                           @foreach($order as $key => $ord)
                           @php
                           $i++;
                           @endphp
                           <tr>
                              <td>{{$i}}</td>
                              <td>{{$ord->order_code}}</td>
                              <td>{{$ord->created_at}}</td>
                              <td>
                                 @if($ord->order_status==1)
                                 New Order
                                 @else
                                 Completed order
                                 @endif
                              </td>
                            <td>
                            <a href="{{URL::to('/view-order/'.$ord->order_code)}}">
                                    <span class="table-remove"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0">View</button></span>
                                 </a>
                            </td>
                                
                     

                              <td>
                                 <a href="{{URL::to('/delete-order/'.$ord->order_code)}}">
                                    <button type="button" onclick="return confirm('Are you sure detele')" class="btn btn-primary btn-rounded btn-sm my-0">Remove</button>
                                 </a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Order Listing</h4>
                           </div>
                           <?php
                              $message= Session::get('message');
                              if($message){
                                 echo '<span style="color:red;font-weight:bold" width ="100%">'.$message.'</span>';
                                 Session::put('message', null);
                              }
                              ?> 
                        </div>
                        <div class="iq-card-body">
                           <div id="table" class="table-editable">
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                                 <thead>
                                    <tr>
                                       <th>Order's name</th>
                                       <th>Total amount</th>
                                       <th>Current</th>
                                       <th>Details</th>
                                       <th>Remove</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($all_order as $key => $order)
                                    <tr>
                                       <td >{{$order->customer_name}}</td>
                                       <td >{{$order->order_total}}</td>
                                       <td>{{$order->order_status}}</td>
                                       <td>
                                       <a href="{{URL::to('/view-order/'.$order->order_id)}}">
                                       <span class="table-remove"><button type="button"
                                             class="btn btn-primary btn-rounded btn-sm my-0">Details</button></span>
                                       </a>
                                       </td>
                                       
                                       <td>
                                       <a  href="{{URL::to('/delete-order/'.$order->order_id)}}">
                                          <button type="button" onclick="return confirm('Are you sure of this deletion')"
                                             class="btn btn-primary btn-rounded btn-sm my-0">Remove</button>
                                             </a>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection