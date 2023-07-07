<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
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
    public function saveCheckout(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_note'] = $request->shipping_note;


       $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id', $shipping_id );
        return Redirect::to('/payment');
    }

    public function orderplace(Request $request){
        //insert payment_method
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Please...';
       $payment_id = DB::table('tbl_payment')->insertGetId($data);
       //insert oder
       $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total(0);
        $order_data['order_status'] = 'Please...';
       $order_id = DB::table('tbl_order')->insertGetId($order_data);
        //insert oder_details
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data = array();
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] =$v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            DB::table('tbl_order_details')->insert($order_d_data);
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
        $result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
        if($result){
            Session::put('customer_id', $result->customer_id );
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        };
    }
}
