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
                              <h4 class="card-title">Customer Listing</h4>
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
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>Block</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($all_view_cus as $key => $cus)
                                    <tr>
                                       <td >{{$cus->customer_name}}</td>
                                       <td >{{$cus->customer_email}}</td>
                                       <td>{{$cus->customer_phone}}</td>
                                       <td>
                                       <a  href="#">
                                          <button type="button" onclick="return confirm('Are you sure block')"
                                             class="btn btn-primary btn-rounded btn-sm my-0">Block</button>
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