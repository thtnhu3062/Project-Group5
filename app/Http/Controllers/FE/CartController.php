<?php

namespace App\Http\Controllers\FE;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\Support\Facades\Redirect;
class CartController extends Controller
{
    public function saveCart(Request $request){
        $productId = $request -> productid_hidden;
        $quantity = $request -> quantity;

        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();
       $data['id'] = $product_info->product_id;
       $data['qty'] = $quantity;
       $data['name'] = $product_info->product_name;
       $data['price'] = $product_info->product_price;
       $data['options']['image'] = $product_info->product_image;
       Cart::add($data);
       return Redirect::to('/show-cart');
        
    }
    public function showCart(Request $request){
        return view('fe.cart.show_cart');
    }
    public function deleteCart($rowId){
        Cart::update($rowId,0);
        return view('fe.cart.show_cart');
    }
    public function updateQuantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');
    }
}
