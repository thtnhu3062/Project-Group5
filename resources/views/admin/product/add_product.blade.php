@extends('admin.layout.layout')

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
                                 <label for="name">Tên Sản Phẩm</label>
                                 <input type="text" name="product_name"class="form-control" id="name1">
                              </div>
                              <div class="form-group">
                                 <label for="name">Giá Sản Phẩm</label>
                                 <input type="text" name="product_price"class="form-control" id="name1">
                              </div>
                              <div class="form-group">
                                 <label for="name">Hình Ảnh Sản Phẩm</label>
                                 <input type="file" name="product_image"class="form-control" id="name1">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Mô tả Sản Phẩm</label>
                                 <textarea class="form-control" name="product_desc" id="exampleFormControlTextarea1" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Nội Dung Sản Phẩm</label>
                                 <textarea class="form-control" name="product_content" id="exampleFormControlTextarea1" rows="2"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Danh Mục Sản Phẩm</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="product_cate">
                                 @foreach($cate_product as $key => $cate)
                                 <option value ="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                  @endforeach
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Thương Hiệu Sản Phẩm</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="product_brand">
                                 @foreach($brand_product as $key => $brand)
                                 <option value ="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                  @endforeach
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Hiển Thị</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="product_status">
                                    <option value ="0">Ẩn</option>
                                    <option value ="1">Hiện</option>
                                 </select>
                              </div>
                              <button type="submit" name="add_category_product" class="btn btn-primary">Thêm Sản phẩm</button>

                           </form>
                        </div>
                     </div>
            
  
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         @endsection 