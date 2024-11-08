<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Produk;
use App\Models\Diskon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with(['produk', 'diskon'])->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $produk = Produk::all();
        $diskon = Diskon::all();
        return view('transaksi.create', compact('produk', 'diskon'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|numeric',
            'diskon_id' => 'nullable|exists:diskon,id',
        ]);

        Transaksi::create($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $produk = Produk::all();
        $diskon = Diskon::all();
        return view('transaksi.edit', compact('transaksi', 'produk', 'diskon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|numeric',
            'diskon_id' => 'nullable|exists:diskon,id',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
