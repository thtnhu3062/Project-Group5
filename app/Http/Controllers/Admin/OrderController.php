<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
session_start();

class OrderController extends Controller
{
    public function viewOrder($order_code){
        $order_details= OrderDetails::where('order_code',$order_code)->get();
        $order= Order::where('order_code',$order_code)->get();
        foreach($order as $key =>$ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
        }
        $customer= Customer::where('customer_id',$customer_id)->first();
        $shipping= Shipping::where('shipping_id',$shipping_id)->first();
        $order_details= OrderDetails::with('product')->where('order_code',$order_code)->get();
        return view('admin.order.view_order')->with(compact('order_details','customer','shipping','order_details'));
    }
    public function managerOrder(){
        $order = Order::orderby('created_at','desc')->get();
        return view('admin.order.manager_order')->with(compact('order'));
    }
    public function deleteOrder($order_code)
    {
        DB::table('tbl_order')->where('order_code', $order_code)->delete();
        return Redirect::to('manager-order');

    }
    public function unactiveCustomer($customer_id)
    {
        DB::table('tbl_customers')->where('customer_id', $customer_id)->update(['customer_status'=>1]);
         Session::put('message','Activation Failed' );
         Alert::warning('Not activated', '');
        return Redirect::to('view-cus');
    }

    public function activeCustomer($customer_id)
    {
        DB::table('tbl_customers')->where('customer_id', $customer_id)->update(['customer_status'=>0]);
         Session::put('message','Successful Activation ' );
        alert()->success('Activated Successfully', '');
        return Redirect::to('view-cus');
    }
}
