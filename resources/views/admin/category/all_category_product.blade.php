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
                     <h4 class="card-title">List Categories</h4>
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
                              <th>Name List</th>
                              <th>Edit</th>
                              <th>Remove</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($all_category_product as $key => $cate_pro)
                           <tr>
                              <td>{{$cate_pro->category_name}}</td>
                              <td>
                                 <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}">
                                    <span class="table-remove"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0">Edit</button></span>
                                 </a>
                              </td>

                              <td>
                              <a href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}">
                                    <button type="button" onclick="return confirm('Are you sure of this deletion')" class="btn btn-primary btn-rounded btn-sm my-0">Remove</button>
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