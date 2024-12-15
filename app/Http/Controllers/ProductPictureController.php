<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPicture;
use App\Models\ProductProduct;
use Illuminate\Support\Facades\Storage;

class ProductPictureController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'productId' => 'required'
        ]);

        $product = ProductProduct::findOrFail($request->productId);


        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('product_pictures', 'public');

            ProductPicture::create([
                'product_product_id' => $product->id,
                'picture_path' => $path,
            ]);
        }

        return redirect()->route('product_products.index')
            ->with('success', 'Picture uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $picture = ProductPicture::findOrFail($id);

        if (Storage::disk('public')->exists($picture->picture_path)) {
            Storage::disk('public')->delete($picture->picture_path);
        }

        if ($request->hasFile('picture')) {
            $newPath = $request->file('picture')->store('product_pictures', 'public');
            $picture->update([
                'picture_path' => $newPath,
            ]);
        }

        return redirect()->route('product_products.show', $picture->product_product_id)
            ->with('success', 'Picture updated successfully.');
    }


    public function destroy($id)
    {
        $picture = ProductPicture::findOrFail($id);

        if (Storage::disk('public')->exists($picture->picture_path)) {
            Storage::disk('public')->delete($picture->picture_path);
        }

        $picture->delete();

        return redirect()->route('product_products.index')
            ->with('success', 'Picture uploaded successfully.');
    }
}
