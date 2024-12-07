<?php

namespace App\Http\Controllers;

use App\Models\ProductProduct;
use Illuminate\Http\Request;

class ProductProductController extends Controller
{
    public function index()
    {
        $products = ProductProduct::with(['reviews','deliveryExpeditions'])->latest()->get();
        return view('product_products.index', compact('products'));
    }

    public function create()
    {
        return view('product_products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_price' => 'required|numeric',
        ]);

        ProductProduct::create($request->all());
        return redirect()->route('product_products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = ProductProduct::with(['reviews','deliveryExpeditions'])->findOrFail($id);

        return view('product_products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = ProductProduct::findOrFail($id);

        return view('product_products.edit', compact('product'));
    }

    public function update(Request $request, ProductProduct $productProduct)
    {
        $request->validate([
            'name' => 'required',
            'product_price' => 'required|numeric',
        ]);

        $productProduct->update($request->all());
        return redirect()->route('product_products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(ProductProduct $productProduct)
    {
        $productProduct->delete();
        return redirect()->route('product_products.index')->with('success', 'Product deleted successfully.');
    }
}
