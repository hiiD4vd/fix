<?php

namespace App\Http\Controllers;

use App\Models\LaporanPenjualan;
use App\Models\Produk;
use App\Models\Diskon;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    public function index()
    {
        $laporan = LaporanPenjualan::with(['produk', 'diskon'])->get();
        return view('laporanpenjualan.index', compact('laporan'));
    }

    // public function create()
    // {
    //     $produk = Produk::all();
    //     $diskon = Diskon::all();
    //     return view('laporan.create', compact('produk', 'diskon'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'produk_id' => 'required|exists:produk,id',
    //         'diskon_id' => 'nullable|exists:diskon,id',
    //         'jumlah' => 'required|numeric',
    //         'total_harga' => 'required|numeric',
    //     ]);

    //     LaporanPenjualan::create($request->all());
    //     return redirect()->route('laporan.index')->with('success', 'Laporan Penjualan berhasil ditambahkan.');
    // }

    // public function edit($id)
    // {
    //     $laporan = LaporanPenjualan::findOrFail($id);
    //     $produk = Produk::all();
    //     $diskon = Diskon::all();
    //     return view('laporan.edit', compact('laporan', 'produk', 'diskon'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'produk_id' => 'required|exists:produk,id',
    //         'diskon_id' => 'nullable|exists:diskon,id',
    //         'jumlah' => 'required|numeric',
    //         'total_harga' => 'required|numeric',
    //     ]);

    //     $laporan = LaporanPenjualan::findOrFail($id);
    //     $laporan->update($request->all());
    //     return redirect()->route('laporan.index')->with('success', 'Laporan Penjualan berhasil diperbarui.');
    // }

    // public function destroy($id)
    // {
    //     $laporan = LaporanPenjualan::findOrFail($id);
    //     $laporan->delete();
    //     return redirect()->route('laporan.index')->with('success', 'Laporan Penjualan berhasil dihapus.');
    // }
}
