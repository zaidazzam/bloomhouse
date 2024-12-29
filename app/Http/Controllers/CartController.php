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
    $productPict = $request->input('product_pict');
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
                'product_pict' => $addons->main_picture,
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
            'product_pict' => $productPict,
            'size' => $size,
            'quantity' => 1,
        ];
    } else {
        $cart[$key]['quantity']++;
    }

    

    session()->put('cart', $cart);

    return response()->json(['success' => true, 'message' => 'Product and Add-Ons added to cart!']);
}

    public function delete(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
        ]);

        $cart = session('cart', []);

        $productId = $request->product_id;
        foreach ($cart as $key => $c) {
            if ($c['product_id'] ==  $productId) {
                unset($cart[$key]);
                session(['cart' => $cart]);
                
                return response()->json(['success' => true, 'message' => 'Item berhasil dihapus']);
            }
        }

        return response()->json(['success' => false, 'message' => 'Item tidak ditemukan di cart']);
    }

    public function update(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'qty' => 'required|integer|min:1',
        ]);

        $cart = session('cart', []);
        $productId = $request->product_id;
        $qty = $request->qty;

        foreach ($cart as &$item) { 
            if ($item['product_id'] == $productId) {
                $item['quantity'] = $qty;
                session(['cart' => $cart]); 

                return response()->json(['success' => true, 'message' => 'Quantity updated successfully']);
            }
        }

        return response()->json(['success' => false, 'message' => 'Product not found in cart']);
    }
}
