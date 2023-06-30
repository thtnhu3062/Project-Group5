<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
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
        return view ('fe.checkout.check_out');
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
    public function payment(){

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
