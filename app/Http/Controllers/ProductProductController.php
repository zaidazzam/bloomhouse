<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\ProductProduct;

class ProductProductController extends Controller
{
    public function index()
    {
        $products = ProductProduct::with(['reviews','deliveryExpeditions','category','pictures'])->latest()->get();
        $categories = ProductCategory::all();
        return view('dashboard-view.produk', compact('products','categories'));
    }

    public function create()
    {
        return view('product_products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'product_stock' => 'required|numeric',
            'address' => 'nullable',
            'product_price' => 'required|numeric',
            'main_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_description' => 'nullable',
            'discount' => 'nullable',
            'consist_of' => 'nullable',
            'category_id' => 'required|array|exists:product_categories,id',
        ]);
        if ($request->hasFile('main_picture')) {
            $validated['main_picture'] = $request->file('main_picture')->store('products', 'public'); 
        }
        $product = ProductProduct::create($validated);
        $product->category()->sync($validated['category_id']);
        return redirect()->route('product_products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = ProductProduct::with(['reviews','deliveryExpeditions','category'])->findOrFail($id);

        return view('product_products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = ProductProduct::findOrFail($id);

        return view('product_products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'product_stock' => 'required|numeric',
            'address' => 'required',
            'product_price' => 'required|numeric',
            'main_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_description' => 'nullable',
            'discount' => 'nullable',
            'consist_of' => 'nullable',
            'category_id' => 'required'
        ]);
    
        $product = ProductProduct::findOrFail($id);
    
        if ($request->hasFile('main_picture')) {
            if ($product->main_picture) {
                Storage::disk('public')->delete($product->main_picture);
            }
            $validated['main_picture'] = $request->file('main_picture')->store('products', 'public'); 
        }
    
        $product->update($validated);
        return redirect()->route('product_products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(ProductProduct $productProduct)
    {
        $productProduct->delete();
        return redirect()->route('product_products.index')->with('success', 'Product deleted successfully.');
    }
}
