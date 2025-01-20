<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductProduct;
use App\Models\ProductCategory;
use App\Models\PostageRule;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Blog;
use App\Models\Tag;

class GuestController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Pencarian berdasarkan nama produk, kategori, atau deskripsi
        $products = ProductProduct::with(['category', 'reviews'])
            ->where('product_name', 'LIKE', "%{$query}%")
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(8); // Menggunakan paginasi

        // Ambil kategori untuk dropdown (jika diperlukan)
        $categories = ProductCategory::all();

        return view('guest.layout.guest.search', compact('products', 'query', 'categories'));
    }

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

    $blogs = Blog::all();
    $tags = Tag::all();

    // Mengirimkan data ke view
<<<<<<< HEAD
    return view('guest-view.homepage', compact('products','blogs', 'tags','categoryProducts', 'categories', 'tulipProduct', 'roseProduct', 'romanceProduct','roseProduct4','tulipProduct4','roseProduct4','HydrangeaProduct4'));
=======
    return view('guest-view.homepage', compact('products','blogs','tags','categoryProducts', 'categories', 'tulipProduct', 'roseProduct', 'romanceProduct','roseProduct4','tulipProduct4','roseProduct4','HydrangeaProduct4'));
>>>>>>> ead80ec2c38dcc0a22f95a1ee9bdcdb71f680aeb
}

public function category(Request $request) {
    $products = ProductProduct::whereDoesntHave('category', function ($query) {
        $query->where('name', 'AddOn');
    })->paginate(8);

    $products2= ProductProduct::with(['reviews', 'deliveryExpeditions', 'category', 'pictures'])
    ->oldest() 
    ->get();

    $categories = ProductCategory::all();

    if ($request->has('categories')) {
        $categories = $request->input('categories');
        $products->whereHas('categories', function ($query) use ($categories) {
            $query->whereIn('id', $categories);
        });
    }

    if ($request->has('min_price') && $request->has('max_price')) {
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $products->whereBetween('product_price', [$minPrice, $maxPrice]);
    }
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
<<<<<<< HEAD
    // Mengirimkan data ke view
=======
>>>>>>> ead80ec2c38dcc0a22f95a1ee9bdcdb71f680aeb
    return view('guest-view.category', compact('products',  'categories', 'products2','categoryProducts'));
}

public function filterProduct(Request $request)
{

    $products = ProductProduct::whereDoesntHave('category', function ($query) {
        $query->where('name', 'AddOn');
    })->paginate(8);

    return response()->json([
        'products' => $products,
    ]);
}

<<<<<<< HEAD
=======

>>>>>>> ead80ec2c38dcc0a22f95a1ee9bdcdb71f680aeb
    public function product(){

     return view('guest-view.product');
        }


<<<<<<< HEAD
    public function blog(){
        $blogs = Blog::with('tags')->get();
        $tags = Tag::all();
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
    return view('guest-view.blog' ,compact('blogs','tags','categoryProducts'));
    }


    public function detailBlog($id){
        $blogs2 = Blog::with('tags')->findOrFail($id);
        $tags = Tag::take(5)->get();
        $blogs = Blog::all();
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
    return view('guest-view.detail-blog', compact('tags','blogs','blogs2','categoryProducts'));
     }
    public function invoice(){

    return view('guest-view.invoice');
         }     public function checkout()
         {
             // Ambil data postage_rule dengan kategori 'Time' dan 'Address'
             $timePostageRules = PostageRule::where('category', 'Time')->get();
             $addressPostageRules = PostageRule::where('category', 'Address')->get();
        // Fetch products for other categories
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

             // Kirim data ke view
             return view('guest-view.checkout', compact('timePostageRules', 'addressPostageRules','categoryProducts'));
         }
=======
        public function blog(){
            $blogs = Blog::with('tags')->get();
            $tags = Tag::take(5)->get();
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
        return view('guest-view.blog' ,compact('blogs','tags','categoryProducts'));
        }


        public function detailBlog($id){
            $blogs2 = Blog::with('tags')->findOrFail($id);
            $tags = Tag::take(5)->get();
            $blogs = Blog::all();
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
        return view('guest-view.detail-blog', compact('tags','blogs','blogs2','categoryProducts'));
         }

     public function checkout()
     {
         // Ambil data postage_rule dengan kategori 'Time' dan 'Address'
         $timePostageRules = PostageRule::where('category', 'Time')->get();
         $addressPostageRules = PostageRule::where('category', 'Address')->get();
    // Fetch products for other categories
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

         // Kirim data ke view
         return view('guest-view.checkout', compact('timePostageRules', 'addressPostageRules','categoryProducts'));
     }

>>>>>>> ead80ec2c38dcc0a22f95a1ee9bdcdb71f680aeb


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
