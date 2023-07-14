<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function addCategory()
    {
        return view("admin.category.add_category_product");
    }
    public function allCategory()
    {
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.category.all_category_product')->with('all_category_product' ,$all_category_product);
        return view("admin.layout.layout")->with('admin.category.all_category_product', $manager_category_product);
    }
    public function saveCategory(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_status = 0;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Successfully Added Category' );
        return Redirect::to('all-category-product');
    }

    public function editCategory($category_product_id)
    {
        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $manager_category_product = view('admin.category.edit_category_product')->with('edit_category_product' ,$edit_category_product);
        return view("admin.layout.layout")->with('admin.category.edit_category_product', $manager_category_product);
    }
    public function updateCategory(Request $request, $category_product_id)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Session::put('message','Successful Update' );
        return Redirect::to('all-category-product');
    }
    public function deleteCategory($category_product_id)
    {
        $products = DB::table('tbl_product')->where('category_id', $category_product_id)->count();
    if($products > 0){
         return Redirect::to('all-category-product')
                ->with('message', 'Can not delete because the category exists products');
    }
    else{
        $category_product_id= DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        return Redirect::to('all-category-product')
                    ->with('message', 'Category Deleted');
    }
        
    }

}
