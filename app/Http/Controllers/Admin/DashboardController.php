<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.home");
    }
    public function home()
    {
        return view("admin.login");
    }

    public function login()
    {
        return view("admin.login");
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
