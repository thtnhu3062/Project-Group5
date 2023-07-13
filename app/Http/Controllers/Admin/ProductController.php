<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
session_start();
class ProductController extends Controller
{
    public function Auth(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function addProduct()
    {

        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();
        return view("admin.product.add_product")->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }
    public function allProduct()
    { 
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
        $manager_product = view('admin.product.all_product')->with('all_product' ,$all_product);
        return view("admin.layout.layout")->with('admin.product.all_product', $manager_product);
    }
    public function saveProduct(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_image;
        
        $get_image = $request->file('product_image');
        if($get_image){
                $get_name_image = $get_image ->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
                $get_image ->move('public/uploads/product', $new_image);
                $data['product_image'] = $new_image;
                DB::table('tbl_product')->insert($data);
                return Redirect::to('all-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        return Redirect::to('all-product');
    }

    public function editProduct($product_id)
    {  
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manager_product = view('admin.product.edit_product')->with('edit_product' ,$edit_product)
        ->with('cate_product',$cate_product)->with('brand_product',$brand_product);
        return view("admin.layout.layout")->with('admin.product.edit_product', $manager_product);
    }
    public function updateProduct(Request $request, $product_id)
    { 
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image ->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();
            $get_image ->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message','Successfully Added Product' );
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message','Successful Update' );
        return Redirect::to('all-product');
    }
    public function deleteProduct($product_id)
    { 
        // DB::table('tbl_product')->where('product_id', $product_id)->delete();
        // return Redirect::to('all-product');
        {
            $order = DB::table('tbl_order_details')->where('product_id', $product_id)->count();
        if($order > 0){
             return Redirect::to('all-product')
                    ->with('message', 'Something went wrong');
        }
        else{
            $product_id= DB::table('tbl_product')->where('product_id', $product_id)->delete();
            return Redirect::to('all-product')
                        ->with('message', 'Product Deleted');
        }
            
        }

    }

    public function unactiveProduct($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>1]);
        Session::put('message','Activation Failed' );
        Alert::warning('Not activated', 'Product');
        return Redirect::to('all-product');
    }

    public function activeProduct($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>0]);
        Session::put('message','Successful Activation' );
        alert()->success('Activation Product', 'Successfully');
        return Redirect::to('all-product');
    }

    
    public function viewCustomer(){
       
        $all_view_cus = DB::table('tbl_customers')->get();
        $manager_cus = view('admin.order.view_customer')->with('all_view_cus' ,$all_view_cus);
        return view("admin.layout.layout")->with('admin.order.view_customer', $manager_cus);
    }

}