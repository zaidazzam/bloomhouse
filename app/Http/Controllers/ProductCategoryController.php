<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::with('products')->latest()->get();
        return view('dashboard-view.category-product', compact('categories'));
    }

    public function create()
    {
        return view('product_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:product_categories',
        ]);

        ProductCategory::create($request->all());

        return redirect()->route('product_categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        $category = ProductCategory::with('products')->findOrFail($id);
        return view('product_categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('product_categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:product_categories,name,' . $id,
        ]);

        $category = ProductCategory::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('product_categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        // Hapus kategori
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('product_categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
