<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return view('dashboard-view.dashboard');
    }

    public function product(){

    return view('dashboard-view.produk');
    }
    public function categoryProduct(){

    return view('dashboard-view.category-product');
    }
    public function blog(){

    return view('dashboard-view.blog');
    }
    public function tagBlog(){

    return view('dashboard-view.tag-blog');
    }

}
