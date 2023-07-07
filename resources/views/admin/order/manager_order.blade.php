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
                              <h4 class="card-title">Liệt Kê Đơn Hàng</h4>
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
                                       <th>tên người dặt </th>
                                       <th>Tổng Tiền </th>
                                       <th>tình trạng </th>
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
                                          <button type="button" onclick="return confirm('Are you sure detele')"
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
         @endsection 