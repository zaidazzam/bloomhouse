<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductProduct;

class CartController extends Controller
{
    public function add(Request $request)
{
    $productId = $request->input('product_id');
    $productName = $request->input('product_name');
    $productPrice = $request->input('product_price');
    $size = $request->input('size'); 
    $addons = $request->input('addons', []);

    
    if (!$size) {
        return response()->json(['success' => false, 'message' => 'Ukuran harus dipilih!']);
    }

    $key = $productId . '_' . $size;

    $cart = session()->get('cart', []); 

    foreach ($addons as $addonId) {
        $addons = ProductProduct::findOrFail($addonId);
        if($addons->discount){
            $price = $addons->product_price * ($addons->discount/100);
        }
        else {
            $price= $addons->product_price;
        }
        if (!isset($cart[$addonId])) {
            $cart[$addonId] = [
                'product_id' => $addons->id,
                'product_name' => $addons->name,
                'product_price' => $price,
                'size' => $addons->size,
                'quantity' => 1,
            ];
        } else {
            $cart[$addonId]['quantity']++;
        }
    }

    if (!isset($cart[$key])) {
        $cart[$key] = [
            'product_id' => $productId,
            'product_name' => $productName,
            'product_price' => $productPrice,
            'size' => $size,
            'quantity' => 1,
        ];
    } else {
        $cart[$key]['quantity']++;
    }

    

    session()->put('cart', $cart);

    return response()->json(['success' => true, 'message' => 'Product and Add-Ons added to cart!']);
}
}
