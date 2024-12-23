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
    // Mengambil produk dengan kategori 'Rose' dan 'Tulip'
    $products = ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
        ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Rose', 'Tulip']);
        })
        ->oldest() // Mengurutkan produk dari yang lebih lama
        ->get();

    // Mengambil semua kategori (untuk ditampilkan di dropdown)
    $categories = ProductCategory::all();

    // Fetch products for Tulip, Rose, and Romance categories
    $tulipProduct = ProductProduct::with(['reviews', 'category'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Tulip');
        })
        ->first(); // Mengambil produk pertama dari kategori Tulip
        $tulipProduct4 = ProductProduct::with(['reviews', 'category'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Tulip');
        })
        ->take(4) // Limits the number of results to 4
        ->get(); // Mengambil produk pertama dari kategori Tulip

    $roseProduct = ProductProduct::with(['reviews', 'category'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Rose');
        })
        ->first(); // Mengambil produk pertama dari kategori Rose
    $roseProduct4 = ProductProduct::with(['reviews', 'category'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Rose');
        })
        ->take(4) // Limits the number of results to 4
        ->get(); // Mengambil produk pertama dari kategori Rose

    $romanceProduct = ProductProduct::with(['reviews', 'category'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Hydrangea');
        })
        ->first(); // Mengambil produk pertama dari kategori Romance
        $HydrangeaProduct4 = ProductProduct::with(['reviews', 'category'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Hydrangea');
        })
        ->take(4) // Limits the number of results to 4
        ->get(); // Mengambil produk pertama dari kategori Romance

    // Fetch products for other categories
    $categoriesToFetch = [
        'Birthday Flowers' => 'birthdayProducts',
        'Get Well Soon' => 'gwsProducts',
        'Graduation' => 'graduProducts',
        'Wedding' => 'weddingProducts',
        'Thank You' => 'thnxProducts',
        'Hydrangea' => 'hydrangeaProducts',
        'Anniversary Flower' => 'annivProducts',
    ];

    $categoryProducts = [];
    foreach ($categoriesToFetch as $categoryName => $variableName) {
        $categoryProducts[$categoryName] = ProductProduct::with(['category'])
            ->whereHas('category', function ($query) use ($categoryName) {
                $query->where('name', $categoryName);
            })
            ->oldest()
            ->take(5)
            ->get();
    }

    // Mengirimkan data ke view
    return view('guest-view.homepage', compact('products', 'categoryProducts', 'categories', 'tulipProduct', 'roseProduct', 'romanceProduct','roseProduct4','tulipProduct4','roseProduct4','HydrangeaProduct4'));
}

    public function category($id)
    {
        $category = ProductCategory::find($id);
        $products = $category->products()->get(); // Ambil produk terkait kategori ini

        return view('guest-view.category', compact('category', 'products'));
    }

    public function product(){

     return view('guest-view.product');
        }
    public function blog(){

        $categories = ProductCategory::all();
        // Fetch products for Tulip category
        $categoriesToFetch = [
            'Rose' => 'roseProducts',
            'Tulip' => 'tulipProducts',
            'Birthday Flowers' => 'birthdayProducts',
            'Get Well Soon' => 'gwsProducts',
            'Graduation' => 'graduProducts',
            'Wedding' => 'weddingProducts',
            'Thank You' => 'thnxProducts',
            'Hydrangea' => 'hydrangeaProducts',
            'Anniversary Flower' => 'annivProducts',
        ];

        $categoryProducts = [];
        foreach ($categoriesToFetch as $categoryName => $variableName) {
            $categoryProducts[$categoryName] = ProductProduct::with(['category'])
                ->whereHas('category', function ($query) use ($categoryName) {
                    $query->where('name', $categoryName);
                })
                ->oldest()
                ->take(5)
                ->get();
        }

    return view('guest-view.blog' , compact('categoryProducts', 'categories'));
        }
    public function detailBlog(){

    return view('guest-view.detail-blog');
     }
    public function checkout(){

    return view('guest-view.checkout');
     }
     public function productShow1($id)
     {
         $product = ProductProduct::with(['reviews','deliveryExpeditions','category','pictures'])->findOrFail($id);

         // Pastikan additional_images ada dan jika perlu decode (misalnya jika disimpan dalam format JSON)
         $product->additional_images = $product->additional_images ? json_decode($product->additional_images) : [];

         $categories = ProductCategory::all();
         // Fetch products for Tulip category
         $categoriesToFetch = [
             'Rose' => 'roseProducts',
             'Tulip' => 'tulipProducts',
             'Birthday Flowers' => 'birthdayProducts',
             'Get Well Soon' => 'gwsProducts',
             'Graduation' => 'graduProducts',
             'Wedding' => 'weddingProducts',
             'Thank You' => 'thnxProducts',
             'Hydrangea' => 'hydrangeaProducts',
             'Anniversary Flower' => 'annivProducts',
         ];

         $categoryProducts = [];
         foreach ($categoriesToFetch as $categoryName => $variableName) {
             $categoryProducts[$categoryName] = ProductProduct::with(['category'])
                 ->whereHas('category', function ($query) use ($categoryName) {
                     $query->where('name', $categoryName);
                 })
                 ->oldest()
                 ->take(5)
                 ->get();
         }

        $product = ProductProduct::with('reviews')->findOrFail($id);

        // Hitung jumlah ulasan dan rating rata-rata
        $averageRating = $product->reviews->avg('rating');
        $reviewCount = $product->reviews->count();

         return view('guest-view.product', compact('product', 'categoryProducts', 'categories','averageRating', 'reviewCount'));
     }


}
