<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 
use Session;
use Carbon\Carbon; 
use Mail; 
use Hash;
use App\Models\Customer;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function forgetPassword()
    {
       return view('fe.auth.forget_password');
    }
    public function updateNewpass()
    {
       return view('fe.auth.new_password');
    }
    public function resetPass(Request $request)
    {
        $data = $request ->all();
        $token_random = Str::random(20);
        $customer = Customer::where('customer_email','=',$data['email'])->where('customer_token','=',$data['token'])->get();
        $count =$customer->count();
        if($count>0){
            foreach($customer as $key =>$cus){
                $customer_id = $cus->customer_id;
            }
            $reset = Customer::find($customer_id);
            $reset->customer_password = md5($data['password_account']);
            $reset->customer_token = $token_random;
            $reset->save();
            return redirect('login-checkout')->with('Success','Password updated successfully');

        }else{
            return redirect('forget-password')->with('erro',' Please re-enter your email because the link is out of date');
           
        }
    }
    
    public function recoverPassword(Request $request)
    {
        $data = $request ->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Password retrieval".''.$now;
        $customer = Customer::where('customer_email','=',$data['email_account'])->get();
        foreach($customer as $key =>$value){
            $customer_id = $value->customer_id;
        }
        if($customer){
                $count_customer =$customer->count();
                if($count_customer==0){
                    return redirect()->back()->with('erro','Email is not registered');
                }else{
                    $token_random = Str::random(20);
                    $customer = Customer::find($customer_id);
                    $customer->customer_token = $token_random;
                    $customer->save();

                    $to_email = $data['email_account'];
                    $link_reset_password = url('/update-email?email='.$to_email.'&token='.$token_random);
                    $data = array("name"=>$title_mail, "body"=>$link_reset_password, "email"=>$data['email_account']);
                    Mail::send('fe.auth.forget_password_notifi', ['data'=>$data], function($message) use ($title_mail,$data){

                        $message -> to($data['email'])->subject($title_mail );
                        $message -> from($data['email'],$title_mail);
                    });
                    return redirect()->back()->with('message','Email sent successfully, please enter your email to reset password');
                }

        }

    }


}
