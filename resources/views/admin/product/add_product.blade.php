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
                              <h4 class="card-title">Add Product</h4>
                           </div>
                        </div>
                        <div class="card-title">
                        </div>
                        <div class="iq-card-body">
                           <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                           @csrf
                              <div class="form-group">
                                 <label for="name">Product Name</label>
                                 <input type="text" placeholder="Enter product name..." name="product_name" class="form-control" id="name1" required="">
                              </div>
                              <div class="form-group">
                                 <label for="name">Product Price</label>
                                 <input type="number" min="1" max="9999" placeholder="Enter amount of dollars..." name="product_price" class="form-control" id="name1" required="">
                              </div>
                              <div class="form-group">
                                 <label for="name">Product Pictures</label>
                                 <input type="file" name="product_image" class="form-control" id="name1" required>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Product Description</label>
                                 <textarea class="form-control" placeholder="Enter a description..." required="" name="product_desc" id="exampleFormControlTextarea1" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Product Contents</label>
                                 <textarea class="form-control" placeholder="Enter content data..." name="product_content" required="" id="exampleFormControlTextarea1" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Product Portfolio</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="product_cate" required="">
                                 @foreach($cate_product as $key => $cate)
                                 <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                  @endforeach
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Product Brands</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="product_brand" required="">
                                 @foreach($brand_product as $key => $brand)
                                 <option value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                  @endforeach
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Display</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="product_status" required="">
                                    <option value ="0">Public</option>
                                    <option value ="1">Private</option>
                                 </select>
                              </div>
                              <button type="submit" name="add_category_product" class="btn btn-primary">Add Product</button>
                           </form>
                        </div>
                     </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endsection 