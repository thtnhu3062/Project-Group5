@extends('admin.layout.layout')

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
                                 <label for="name">Tên danh mục</label>
                                 <input type="text" name="category_product_name"class="form-control" id="name1">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Mô tả Danh mục</label>
                                 <textarea class="form-control" name="category_product_desc" id="exampleFormControlTextarea1" rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Hiển Thị</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="category_product_status">
                                    <option value ="0">Ẩn</option>
                                    <option value ="1">Hiện</option>
                                 </select>
                              </div>
                              <button type="submit" name="add_category_product" class="btn btn-primary">Thêm Danh Mục</button>

                           </form>
                        </div>
                     </div>
            
  
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         @endsection 