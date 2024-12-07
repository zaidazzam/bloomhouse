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
        $request->validate([
            'product_product_id' => 'required|exists:product_products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:250',
        ]);

        ProductReview::create($request->all());

        return redirect()->route('product_reviews.index')
            ->with('success', 'Review created successfully.');
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
