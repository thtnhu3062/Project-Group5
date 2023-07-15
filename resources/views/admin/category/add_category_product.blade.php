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
                     <h4 class="card-title">Add Category Product</h4>
                  </div>
               </div>
               <div class="card-title">

               </div>
               <div class="iq-card-body">
                  <form action="{{URL::to('/save-category-product')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label for="name">Name List</label>
                        <input type="text" placeholder="Enter name..." name="category_product_name" class="form-control" id="name1" required="">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Description</label>
                        <textarea class="form-control" placeholder="Enter a description..." name="category_product_desc" id="exampleFormControlTextarea1" maxlength="500" rows="5" required=""></textarea>
                     </div>
                     <!-- <div class="form-group">
                        <label for="exampleFormControlSelect1">Display</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category_product_status" required="">
                           <option value="0">Public</option>
                           <option value="1">Private</option>
                        </select>
                     </div> -->
                     <button type="submit" name="add_category_product" class="btn btn-primary">Add Category</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection