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
use RealRashid\SweetAlert\Facades\Alert;
class CartController extends Controller
{

    public function saveCart(Request $request){
        $productId = $request -> productid_hidden;
        $quantity = $request -> qty;

        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();
       $data['id'] = $product_info->product_id;
       $data['qty'] = $quantity;
       $data['name'] = $product_info->product_name;
       $data['price'] = $product_info->product_price;
       $data['options']['image'] = $product_info->product_image;
       Cart::add($data);
       alert()->success('Post Created', 'Successfully');
       return Redirect()->back();
        
    }
    public function showCart(Request $request){
        return view('fe.cart.show_cart');
    }
    public function deleteCart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
    public function updateQuantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');
    }
    
// public function increaseQuantity($rowId)
// {
//     $product = Cart::instance('cart')->get($rowId);
//     $qty = $product->qty + 1;
//     Cart::instance('cart')->update($rowId,$qty);                
// }

// public function decreaseQuantity($rowId)
// {
//     $product = Cart::instance('cart')->get($rowId);
//     $qty = $product->qty - 1;
//     Cart::instance('cart')->update($rowId,$qty);        
// }

}
