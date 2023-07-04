@extends('admin.layout.layout')

@section('contents')
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Update Brand Product</h4>
                  </div>
               </div>
               <div class="card-title">

               </div>
               <div class="iq-card-body">
                  @foreach($edit_brand_product as $key => $edit_value)
                  <form action="{{URL::to('/update-brand-product/'.$edit_value -> brand_id)}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label for="name">List Name</label>
                        <input type="text" value="{{$edit_value -> brand_name}}" name="brand_product_name" class="form-control" id="name1">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Description</label>
                        <textarea class="form-control" name="brand_product_desc" id="exampleFormControlTextarea1" rows="5">{{$edit_value -> brand_desc}} </textarea>
                     </div>
                     <button type="submit" name="update_brand_product" class="btn btn-primary">Update Directory</button>
                  </form>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection