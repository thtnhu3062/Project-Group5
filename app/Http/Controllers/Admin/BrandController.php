<?php

namespace App\Http\Controllers\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandController extends Controller
{
    public function addBrand()
    {
        return view("admin.brand.add_brand_product");
    }
    public function allBrand()
    {
        $all_brand_product = DB::table('tbl_brand')->get();
        $manager_brand_product = view('admin.brand.all_brand_product')->with('all_brand_product' ,$all_brand_product);
        return view("admin.layout.layout")->with('admin.brand.all_brand_product', $manager_brand_product);
    }
    public function saveBrand(Request $request)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm Thương Hiệu Thành Công' );
        return Redirect::to('all-brand-product');
    }

    public function editBrand($brand_product_id)
    {
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_product_id)->get();
        $manager_brand_product = view('admin.brand.edit_brand_product')->with('edit_brand_product' ,$edit_brand_product);
        return view("admin.layout.layout")->with('admin.brand.edit_brand_product', $manager_brand_product);
    }
    public function updateBrand(Request $request, $brand_product_id)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        Session::put('message','Cập Nhật Thương Hiệu Thành Công' );
        return Redirect::to('all-brand-product');
    }
    public function deleteBrand($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        return Redirect::to('all-brand-product');
    }
    public function unactiveBrand($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>1]);
         Session::put('message','Không kích hoạt Thương Hiệu' );
        alert()->success('Post Created', 'Successfully');
        return Redirect::to('all-brand-product');
    }

    public function activeBrand($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status'=>0]);
         Session::put('message','Kích hoạt Thương Hiệu' );
        alert()->success('Post Created', 'Successfully');
        return Redirect::to('all-brand-product');
    }


}
