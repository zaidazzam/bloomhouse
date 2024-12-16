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
            'postage_rule' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);

        PostageRule::create($request->all());

        return redirect()->route('postages.index')
            ->with('success', 'Postage Rule created successfully.');
    }

    public function show($id)
    {
        $postages = PostageRule::findOrFail($id);
        return view('postages.show', compact('postages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'postage_rule' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);

        $postage= PostageRule::findOrFail($id);
        $postage->update($request->all());

        return redirect()->route('postages.index')
            ->with('success', 'Postage Rule updated successfully.');
    }

    public function destroy($id)
    {
        // Hapus kategori
        $postage = PostageRule::findOrFail($id);
        $postage->delete();

        return redirect()->route('postages.index')
            ->with('success', 'Postage Rule deleted successfully.');
    }
}
