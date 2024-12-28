<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard-view.dashboard');
    }

    public function product(){
        return redirect('/product_products');
    }

    public function categoryProduct(){
        return redirect('/product_categories');
    }
    public function delivery(){
        return redirect('/postages');
    }

    public function blog(){
        return redirect('/blogs');
    }

    public function tagBlog(){
        return redirect('/tags');
    }
    public function reportTransaksi(){
        return view('dashboard-view.report-transaki');
    }
    public function reportProductReview(){
        return view('dashboard-view.report-transaki');
    }


}
