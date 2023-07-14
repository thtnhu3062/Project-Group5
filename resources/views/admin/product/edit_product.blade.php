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
                     <h4 class="card-title">Update Product</h4>
                  </div>
               </div>
               <div class="card-title">

               </div>
               <div class="iq-card-body">
                  @foreach($edit_product as $key => $pro)
                  <form action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label for="name">Product's name</label>
                        <input type="text" name="product_name" class="form-control" id="name1" value="{{$pro->product_name}}" required>
                     </div>
                     <div class="form-group">
                        <label for="name">Product Price</label>
                        <input type="number" name="product_price" class="form-control" id="name1" value="{{$pro->product_price}}" required>
                     </div>
                     <div class="form-group">
                        <label for="name">Product Pictures</label>
                        <input type="file" name="product_image" class="form-control" id="name1">
                        <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100px" width="100px" alt="" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Description</label>
                        <textarea class="form-control" name="product_desc" id="exampleFormControlTextarea1" rows="2" required>{{$pro->product_desc}}"</textarea>
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Contents</label>
                        <textarea class="form-control" name="product_content" id="exampleFormControlTextarea1" rows="2" required>{{$pro->product_content}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Categorys</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="product_cate" required>
                           @foreach($cate_product as $key => $cate)
                           @if($cate->category_id == $pro->category_id)
                           <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                           @else
                           <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                           @endif
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Brands</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="product_brand" required>
                           @foreach($brand_product as $key => $brand)
                           @if($brand->brand_id == $pro->brand_id)
                           <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                           @else
                           <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                           @endif
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Display</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="product_status" required>
                           <option value="0">Public</option>
                           <option value="1">Private</option>
                        </select>
                     </div>
                     <button type="submit" name="add_category_product" class="btn btn-primary">Update Product</button>
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