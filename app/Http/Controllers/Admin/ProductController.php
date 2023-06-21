<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
class ProductController extends Controller
{

    public function index()
    {
        $prods = Product::all();
        // return view('admin.product.index')->with([
        //     'prods' => $prods
        // ]);
        return view('admin.product.index', compact('prods'));
    }


}