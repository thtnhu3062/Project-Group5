@extends('admin.layout.layout')

@section('contents')
<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Brand Product</h4>
                           </div>
                        </div>
                        <div class="card-title">
                         
                        </div>
                        <div class="iq-card-body">
                           <form action="{{URL::to('save-brand-product')}}" method="post" enctype="multipart/form-data">
                           @csrf
                              <div class="form-group">
                                 <label for="name">Tên Thương Hiệu</label>
                                 <input type="text" name="brand_product_name"class="form-control" id="name1">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Mô tả Thương Hiệu</label>
                                 <textarea class="form-control" name="brand_product_desc" id="exampleFormControlTextarea1" rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Hiển thị</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="brand_product_status">
                                    <option value ="0">Ẩn</option>
                                    <option value ="1">Hiện</option>
                                 </select>
                              </div>
                              <button type="submit" name="add_brand_product" class="btn btn-primary">Thêm Thương Hiệu</button>

                           </form>
                        </div>
                     </div>
            
  
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         @endsection 