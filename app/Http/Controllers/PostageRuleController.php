<?php

namespace App\Http\Controllers;

use App\Models\PostageRule;
use Illuminate\Http\Request;

class PostageRuleController extends Controller
{
    public function index()
    {
        $postages = PostageRule::all();
        return view('dashboard-view.postage', compact('postages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'postage_rule' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        PostageRule::create($request->all());

        return redirect()->route('postages.index')
            ->with('success', 'Postage Rule created successfully.');
    }

    public function show($id)
    {
        $postage = PostageRule::findOrFail($id);
        return view('postages.show', compact('postage'));
    }

    public function edit($id)
    {
        $postage = PostageRule::findOrFail($id); // Ambil data berdasarkan ID
        return view('dashboard-view.edit_postage', compact('postage')); // Ganti dengan view yang sesuai
    }

    public function update(Request $request, PostageRule $postage)
    {

        $validated = $request->validate([
            'postage_rule' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',  // Menggunakan validasi integer untuk memastikan harga adalah angka bulat
        ]);

        $postage->update($validated);

        return redirect()->route('postages.index')
            ->with('success', 'Postage Rule updated successfully.');
    }

    public function destroy($id)
    {
        $postage = PostageRule::findOrFail($id);
        $postage->delete();

        return redirect()->route('postages.index')
            ->with('success', 'Postage Rule deleted successfully.');
    }
}
