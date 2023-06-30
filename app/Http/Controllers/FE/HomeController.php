<?php

namespace App\Http\Controllers\FE;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    public function index(){
        return view('fe.index');
    }
    public function shop()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id', 'desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id', 'desc')->limit('10')->get();

        return view('fe.shop1')->with('category',$cate_product )->with('brand',$brand_product)->with('all_product',$all_product);
    }

    public function showCategory($category_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id', 'desc')->get();
        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->get();
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
        return view('fe.category.showcategory')->with('category',$cate_product )->with('brand',$brand_product)->with('category_by_id', $category_by_id)->with('category_name', $category_name);

    }
    public function showBrand($brand_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id', 'desc')->get();
        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_product.brand_id',$brand_id)->get();
        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();
        return view('fe.brand.showbrand')->with('category',$cate_product )->with('brand',$brand_product)->with('brand_by_id', $brand_by_id)->with('brand_name', $brand_name);

    }

    public function detailsProduct($product_id){
        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id', $product_id)->get();
        return view('fe.product.details_product')->with('details_product',$details_product);
    }




    
//
    /*    $role1 = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);

        $role2 = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'User',
            'slug' => 'user',
        ]);

        $credentials = [
            'email'    => 'admin@gmail.com',
            'password' => '123',
        ];

        $user1 = \Sentinel::create($credentials);
        $activation = \Activation::create($user1);
        $role1->users()->attach($user1);

        $credentials = [
            'email'    => 'user@gmail.com',
            'password' => '123',
        ];
        $user2 = \Sentinel::create($credentials);
        $activation = \Activation::create($user2);
        $role2->users()->attach($user2);

*/


    public function blog() 
    { 
        return view('fe.blog') ; 
    }

    public function aboutus() 
    { 
        return view('fe.aboutus') ; 
    }

    public function contactus() 
    { 
        return view('fe.contactus') ; 
    }

    public function faq() 
    { 
        return view('fe.faq') ; 
    }
 

}