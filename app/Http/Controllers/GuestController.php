<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductProduct;
use App\Models\ProductCategory;

class GuestController extends Controller
{
    public function index()
    {
        // Mengambil data produk terbaru dengan eager loading relasi
        $products = ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
        ->oldest() // Mengurutkan data dari yang lebih lama
        ->get();
        $categories = ProductCategory::all();

        // Mengirimkan data ke view
        return view('guest-view.homepage', compact('products','categories'));
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
    public function checkout(){

    return view('guest-view.checkout');
     }
}
