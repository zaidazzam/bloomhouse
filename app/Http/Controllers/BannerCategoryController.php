<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerCategoryController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $banners = DB::table('banners')->get();
        $categories = DB::table('product_categories')->get(); // Ambil kategori dari tabel categories
        return view('dashboard-view.banners', compact('banners', 'categories'));
    }
    

    // Menampilkan form tambah banner
    public function create()
    {
        return view('banners.create');
    }

    // Menyimpan data banner ke database
    public function store(Request $request)
    {
        $request->validate([
            'banner1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category1' => 'required|integer',
            'category2' => 'required|integer',
            'category3' => 'required|integer',
        ]);

        // Upload file dan simpan nama filenya
        $banner1 = $request->file('banner1')->store('banners', 'public');
        $banner2 = $request->file('banner2')->store('banners', 'public');
        $banner3 = $request->file('banner3')->store('banners', 'public');

        DB::table('banners')->insert([
            'banner1' => $banner1,
            'banner2' => $banner2,
            'banner3' => $banner3,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'category3' => $request->category3,
            'created_at' => now(),
        ]);

        return redirect()->route('banner-categories.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();
        return view('banners.show', compact('banner'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();
        $categories = DB::table('product_categories')->get(); // Ambil kategori untuk dropdown
        return view('dashboard-view.edit-banners', compact('banner', 'categories'));
    }
    

    // Update data banner
    public function update(Request $request, $id)
    {
        $request->validate([
            'category1' => 'required|integer',
            'category2' => 'required|integer',
            'category3' => 'required|integer',
        ]);
    
        $data = [
            'category1' => $request->category1,
            'category2' => $request->category2,
            'category3' => $request->category3,
            'updated_at' => now(),
        ];
    
        if ($request->hasFile('banner1')) {
            $data['banner1'] = $request->file('banner1')->store('banners', 'public');
        }
        if ($request->hasFile('banner2')) {
            $data['banner2'] = $request->file('banner2')->store('banners', 'public');
        }
        if ($request->hasFile('banner3')) {
            $data['banner3'] = $request->file('banner3')->store('banners', 'public');
        }
    
        DB::table('banners')->where('id', $id)->update($data);
    
        return redirect()->route('banner-categories.index')->with('success', 'Banner berhasil diperbarui.');
    }
    

    // Hapus data banner
    public function destroy($id)
    {
        DB::table('banners')->where('id', $id)->delete();
        return redirect()->route('banner-categories.index')->with('success', 'Banner berhasil dihapus.');
    }
}
