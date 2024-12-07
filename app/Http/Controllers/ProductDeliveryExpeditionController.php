<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductProduct;
use App\Models\ProductDeliveryExpedition;

class ProductDeliveryExpeditionController extends Controller
{
    public function index()
    {
        $expeditions = ProductDeliveryExpedition::with('product')->latest()->get();
        return view('product_delivery_expeditions.index', compact('expeditions'));
    }

    public function create()
    {
        $products = ProductProduct::all();
        return view('product_delivery_expeditions.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_product_id' => 'required|exists:product_products,id',
            'expedition_name' => 'required|string|max:255',
            'delivery_cost' => 'required|integer|min:0',
            'delivery_date' => 'required|date',
        ]);

        ProductDeliveryExpedition::create($request->all());

        return redirect()->route('product_delivery_expeditions.index')
            ->with('success', 'Expedition created successfully.');
    }

    public function show($id)
    {
        $expedition = ProductDeliveryExpedition::with('product')->findOrFail($id);
        return view('product_delivery_expeditions.show', compact('expedition'));
    }

    public function edit($id)
    {
        $expedition = ProductDeliveryExpedition::findOrFail($id);
        $products = ProductProduct::all();

        return view('product_delivery_expeditions.edit', compact('expedition', 'products'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'product_product_id' => 'required|exists:product_products,id',
            'expedition_name' => 'required|string|max:255',
            'delivery_cost' => 'required|integer|min:0',
            'delivery_date' => 'required|date',
        ]);

        $expedition = ProductDeliveryExpedition::findOrFail($id);
        $expedition->update($request->all());

        return redirect()->route('product_delivery_expeditions.index')
            ->with('success', 'Expedition updated successfully.');
    }

    public function destroy($id)
    {
        $expedition = ProductDeliveryExpedition::findOrFail($id);
        $expedition->delete();

        return redirect()->route('product_delivery_expeditions.index')
            ->with('success', 'Expedition deleted successfully.');
    }
}
