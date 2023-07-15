<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function loginCheckout(){
        return view('fe.login.login_checkout');

    }
    public function register(){
        return view('fe.login.register');

    }
    public function addCustomer(Request $request){
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);
        $data['customer_status'] = $request->customer_status = 0;

       $customer_id = DB::table('tbl_customers')->insertGetId($data);
        Session::put('customer_id', $customer_id );
        Session::put('customer_name', $request->customer_name );
        return Redirect::to('/checkout');

    }
    public function checkout(){
        $customer = DB::table('tbl_customers');
        $manager_product = view('fe.checkout.check_out')->with('customer' ,$customer);
        return view ('fe.checkout.check_out')->with('manager_product',$manager_product );
    }
    public function payment(){
        $customer = DB::table('tbl_customers');
        $shipping = DB::table('tbl_shipping');
        $manager_product = view('fe.checkout.check_out')->with('customer' ,$customer)->with('shipping' ,$shipping);
        $shipping_id = DB::table('tbl_shipping')->get();
        Session::put('shipping_id', $shipping_id );
        return view ('fe.checkout.check_out')->with('manager_product',$manager_product );
    }
    public function saveCheckout(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_note'] = $request->shipping_note;
       $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id', $shipping_id );
        return view ('fe.checkout.check_out');
    }
    public function comfimOrder(Request $request){
        $data = $request->all();
        $shipping = new Shipping();
        $shipping ->shipping_name =$data['shipping_name'];
        $shipping ->shipping_email =$data['shipping_email'];
        $shipping ->shipping_phone =$data['shipping_phone'];
        $shipping ->shipping_address =$data['shipping_address'];
        $shipping ->shipping_note =$data['shipping_note'];
        $shipping->save();
        $shipping = $shipping->shipping_id;

        $checkout_code = substr(md5(microtime()),rand(0,26),5);

        $order = new Order();
        $order ->customer_id = Session::get('customer_id');
        $order ->shipping_id = $shipping;
        $order ->order_status = 1;
        $order ->order_code = $checkout_code;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order ->created_at = now();
        $order->save();


        if(Cart::content()== true){
            foreach(Cart::content() as $key=> $v_content){
                $order_details= new OrderDetails();
                $order_details->order_code = $checkout_code;
                $order_details['product_id'] = $v_content->id;
                $order_details['product_name'] = $v_content->name;
                $order_details['product_price'] =$v_content->price;
                $order_details['product_sales_quantity'] = $v_content->qty;
                $order_details->save();
            }
        }
        Cart::destroy();
        return view('fe.payment');
    }

    public function logoutCheckout(){
        Session::flush();
        return Redirect('/login-checkout');
    }

    public function loginCustomer(Request $request){
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result1 = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->where('customer_status',$customer_status=0)->first();
        if($result1){
            Session::put('customer_id', $result1->customer_id );
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        };
    }


}
