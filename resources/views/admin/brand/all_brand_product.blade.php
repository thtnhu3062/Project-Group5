@extends('admin.layout.layout')

@section('contents')
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">List Product Brand</h4>
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
                              <th>Brand Name</th>
                              <th>Display</th>
                              <th>Edit</th>
                              <th>Remove</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($all_brand_product as $key => $brand_pro)
                           <tr>
                              <td>{{$brand_pro->brand_name}}</td>
                              <td><span>
                                    <?php
                                    if ($brand_pro->brand_status == 0) {
                                    ?>
                                       <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"><span style="color:red; font-size: 25px; " class="fa fa-thumbs-up"></span></a>
                                    <?php
                                    } else {
                                    ?>
                                       <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"><span style="color:blue; font-size: 25px;" class=" fa fa-thumbs-down"></span></a>
                                    <?php
                                    }
                                    ?>

                                 </span></td>
                              <td>
                                 <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}">
                                    <span class="table-remove"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0">Edit</button></span>
                                 </a>
                              </td>

                              <td>
                                 <a href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}">
                                    <button type="button" onclick="return confirm('Are you sure detele')" class="btn btn-primary btn-rounded btn-sm my-0">Remove</button>
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