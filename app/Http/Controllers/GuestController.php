<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){

        return view('guest-view.homepage');
    }

    public function category(){

        return view('guest-view.category');
    }
    public function product(){

     return view('guest-view.product');
        }
    public function blog(){

    return view('guest-view.blog');
        }
    public function detailBlog(){

    return view('guest-view.detail-blog');
     }
}