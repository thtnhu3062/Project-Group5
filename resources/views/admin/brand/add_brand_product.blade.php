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
                     <h4 class="card-title">Add Brand</h4>
                  </div>
               </div>
               <div class="card-title">

               </div>
               <div class="iq-card-body">
                  <form action="{{URL::to('save-brand-product')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label for="name">Brand Name</label>
                        <input type="text" placeholder="Enter name..." name="brand_product_name" class="form-control" id="name1" required="">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Brand Description</label>
                        <textarea class="form-control" placeholder="Enter a description..." name="brand_product_desc" id="exampleFormControlTextarea1" rows="5" maxlength="1000" required=""></textarea>
                     </div>
                     <button type="submit" name="add_brand_product" class="btn btn-primary">Add Brand</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection