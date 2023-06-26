<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//
    /*    $role1 = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);

        $role2 = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'User',
            'slug' => 'user',
        ]);

        $credentials = [
            'email'    => 'admin@gmail.com',
            'password' => '123',
        ];

        $user1 = \Sentinel::create($credentials);
        $activation = \Activation::create($user1);
        $role1->users()->attach($user1);

        $credentials = [
            'email'    => 'user@gmail.com',
            'password' => '123',
        ];
        $user2 = \Sentinel::create($credentials);
        $activation = \Activation::create($user2);
        $role2->users()->attach($user2);

*/

return view('fe.index') ;

    }

    public function login()
    {
        return view('fe.login');
    }

    public function createaccount()
    {
        return view('fe.createAccount');
    }

    public function aboutus()
    {
        return view('fe.aboutus');
    }

    public function contactus()
    {
        return view('fe.contactus');
    }


    public function faq()
    {
        return view('fe.faq');
    }

    public function blog() 
    { 
        return view('fe.blog') ; 
    }

}