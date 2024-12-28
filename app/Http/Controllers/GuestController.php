<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductProduct;
use App\Models\ProductCategory;
use App\Models\PostageRule;

class GuestController extends Controller
{
    public function index()
{
    // Mengambil produk dengan kategori 'Rose' dan 'Tulip'
    $products = ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
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
public function category(Request $request)
{
    // Mengambil produk dengan kategori 'Rose' dan 'Tulip'
    $products = ProductProduct::whereDoesntHave('category', function ($query) {
        $query->where('name', 'AddOn');
    })->paginate(8);

    $products2= ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
    ->oldest() // Mengurutkan produk dari yang lebih lama
    ->get();

    // Mengambil semua kategori (untuk ditampilkan di dropdown)
    $categories = ProductCategory::all();

    // Fetch products for Tulip, Rose, and Romance categories
// Mengaplikasikan filter kategori jika ada
    if ($request->has('categories')) {
        $categories = $request->input('categories');
        $products->whereHas('categories', function ($query) use ($categories) {
            $query->whereIn('id', $categories);
        });
    }

    // Mengaplikasikan filter harga jika ada
    if ($request->has('min_price') && $request->has('max_price')) {
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $products->whereBetween('product_price', [$minPrice, $maxPrice]);
    }
    // Mengirimkan data ke view
    return view('guest-view.category', compact('products',  'categories', 'products2'));
}

public function filter(Request $request)
{
    // Start with the Product query
    $query = ProductProduct::query();

    // Filter by search term (if provided)
    if ($request->has('search') && $request->search) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    // Filter by categories (if any categories are selected)
    if ($request->has('categories') && count($request->categories) > 0) {
        $query->whereIn('category_id', $request->categories);
    }

    // Filter by price range (if provided)
    if ($request->has('minPrice')) {
        $query->where('product_price', '>=', $request->minPrice);
    }
    if ($request->has('maxPrice')) {
        $query->where('product_price', '<=', $request->maxPrice);
    }

    // Execute the query to get the filtered products
    $products = $query->get();

    // Return the filtered products as JSON
    return response()->json([
        'success' => true,
        'products' => $products
    ]);
}



// public function category()
// {
//     $products = ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
//         ->oldest()
//         ->get();

//     // Ambil kategori unik dari produk
//     $categories = $products->pluck('category')->filter()->unique('id');

//     return view('guest-view.category', compact('products', 'categories'));
// }



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
     public function checkout()
     {
         // Ambil data postage_rule dengan kategori 'Time' dan 'Address'
         $timePostageRules = PostageRule::where('category', 'Time')->get();
         $addressPostageRules = PostageRule::where('category', 'Address')->get();

         // Kirim data ke view
         return view('guest-view.checkout', compact('timePostageRules', 'addressPostageRules'));
     }



     public function productShow1($id)
     {
         $product = ProductProduct::with(['reviews','deliveryExpeditions','category','pictures'])->findOrFail($id);
         $products = ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
         ->oldest() // Mengurutkan produk dari yang lebih lama
         ->get();
         $productAddOns = ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
            ->whereHas('category', function ($query) {
                $query->where('name', 'AddOn');
            })
            ->oldest() // Mengurutkan produk dari yang lebih lama
            ->get();


         // Pastikan additional_images ada dan jika perlu decode (misalnya jika     impan dalam format JSON)
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

         return view('guest-view.product', compact('product','products','productAddOns', 'categoryProducts', 'categories','averageRating', 'reviewCount'));
     }


}
