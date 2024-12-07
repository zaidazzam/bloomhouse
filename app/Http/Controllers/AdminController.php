<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return view('dashboard-view.dashboard');
    }

    public function produk(){

    return view('dashboard-view.produk');
    }

}
