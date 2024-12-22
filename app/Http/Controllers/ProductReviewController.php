<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\ProductProduct;

class ProductReviewController extends Controller
{

    public function index()
    {
        $reviews = ProductReview::with('product')->latest()->get();
        return view('product_reviews.index', compact('reviews'));
    }


    public function create()
    {
        $products = ProductProduct::all();
        return view('product_reviews.create', compact('products'));
    }


    public function store(Request $request)
    {
        // Validasi input data, termasuk review_title dan customer_name
        $request->validate([
            'product_product_id' => 'required|exists:product_products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:250',
            'review_title' => 'required|string|max:255',  // Validasi untuk review_title
            'customer_name' => 'nullable|string|max:255',  // Validasi untuk customer_name
        ]);

        // Menyimpan review ke dalam database
        ProductReview::create([
            'product_product_id' => $request->product_product_id,
            'rating' => $request->rating,
            'review' => $request->review,
            'review_title' => $request->review_title,  // Menambahkan review_title
            'customer_name' => $request->customer_name,  // Menambahkan customer_name
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Review created successfully.');
    }



    public function show(ProductReview $productReview)
    {
        return view('product_reviews.show', compact('productReview'));
    }


    public function edit(ProductReview $productReview)
    {
        $products = ProductProduct::all();
        return view('product_reviews.edit', compact('productReview', 'products'));
    }


    public function update(Request $request, ProductReview $productReview)
    {
        $request->validate([
            'product_product_id' => 'required|exists:product_products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);

        $productReview->update($request->all());

        return redirect()->route('product_reviews.index')
            ->with('success', 'Review updated successfully.');
    }


    public function destroy(ProductReview $productReview)
    {
        $productReview->delete();

        return redirect()->route('product_reviews.index')
            ->with('success', 'Review deleted successfully.');
    }
}
