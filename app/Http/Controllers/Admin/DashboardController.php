<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DashboardController extends Controller
{
    public function Auth(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
                Session::put('admin_name',$request->admin_name);
                Session::put('admin_id',$request->admin_id);
                return Redirect::to('/dashboard');
        }else{
            Session::put('message','Email or Password failes');
            return Redirect::to('/admin');
        }
    }
    public function index()
    {
        return view("admin.login");
    }
    public function logout()
    {
        Session::put('admin_name',null);
                Session::put('admin_id',null);
                return Redirect::to('/admin');
    }

    public function showDashboard()
    {  
        return view("admin.home");
    }


    public function profile()
    { 
        return view("admin.profile.myprofile");
    }

    public function editprofile()
    { 
        return view("admin.edit.editprofile");
    }
}
