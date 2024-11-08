<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Stok;
use App\Models\Diskon;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori', 'stok', 'diskon')->get();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $stok = Stok::all();
        $diskon = Diskon::all();

        return view('produk.create', compact('kategori', 'stok', 'diskon'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|String',
            'harga' => 'required|numeric',
            // 'kategori_id' => '',
            'stok' => 'required|numeric',
            'diskon' => 'nullable',
        ]);

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'nama_kategori' => $request->kategori_id,
            'stok_id' => $request->stok,
            // 'diskon_id' => $request->diskon,
        ]);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        $stok = Stok::all();
        $diskon = Diskon::all();

        return view('produk.edit', compact('produk', 'kategori', 'stok', 'diskon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'kategori_id' => 'required',
            'stok_id' => 'required',
            'diskon_id' => 'nullable',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
