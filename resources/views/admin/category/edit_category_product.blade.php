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
                              <h4 class="card-title">Update Category Product</h4>
                           </div>
                        </div>
                        <div class="card-title">
                         
                        </div>
                        <div class="iq-card-body">
                            @foreach($edit_category_product as $key => $edit_value)
                           <form action="{{URL::to('/update-category-product/'.$edit_value -> category_id)}}" method="post" enctype="multipart/form-data">
                           @csrf
                              <div class="form-group">
                                 <label for="name">Tên danh mục</label>
                                 <input type="text" value ="{{$edit_value -> category_name}}" name="category_product_name"class="form-control" id="name1">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Mô tả Danh mục</label>
                                 <textarea class="form-control" name="category_product_desc" id="exampleFormControlTextarea1" rows="5">{{$edit_value -> category_desc}} </textarea>
                              </div>
                              <button type="submit" name="update_category_product" class="btn btn-primary">Cập nhật Danh Mục</button>

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