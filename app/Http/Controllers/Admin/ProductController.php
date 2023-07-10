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

    public function index()
    {
        $prods = Product::all();
        // return view('admin.product.index')->with([
        //     'prods' => $prods
        // ]);
        return view('admin.product.index', compact('prods'));
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
                Session::put('message','Thêm Sản Phẩm Thành Công' );
                return Redirect::to('all-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm Danh Mục Thành Công' );
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
            Session::put('message','Thêm Sản Phẩm Thành Công' );
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật Sản Phẩm Thành Công' );
        return Redirect::to('all-product');
    }
    public function deleteProduct($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Alert::warning('Warning Title', 'Warning Message');
        return Redirect::to('all-product');

    }

    public function unactiveProduct($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>1]);
        Session::put('message','Không kích hoạt Sản phẩm' );
        alert()->success('Post Created', 'Successfully');
        return Redirect::to('all-product');
    }

    public function activeProduct($product_id)
    {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>0]);
        Session::put('message','Kích hoạt Sản Phẩm' );
        alert()->success('Post Created', 'Successfully');
        return Redirect::to('all-product');
    }

    //order
    public function managerOrder(){
       
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->select('tbl_order.*','tbl_customers.customer_name')
        ->orderby('tbl_order.order_id','desc')->get();
        $manager_order = view('admin.order.manager_order')->with('all_order' ,$all_order);
        return view("admin.layout.layout")->with('admin.order.manager_order', $manager_order);
    }
    public function viewOrder($orderId){
        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*','tbl_order_details.*')->first();
        $manager_order_by_id = view('admin.order.view_order')->with('order_by_id' ,$order_by_id);
        return view("admin.layout.layout")->with('admin.order.view_order', $manager_order_by_id);
    }

    public function viewCustomer(){
       
        $all_view_cus = DB::table('tbl_customers')->get();
        $manager_cus = view('admin.order.view_customer')->with('all_view_cus' ,$all_view_cus);
        return view("admin.layout.layout")->with('admin.order.view_customer', $manager_cus);
    }

}