<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $stok = Stok::all();
        return view('stok.index', compact('stok'));
    }

    public function create()
    {
        return view('stok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric',
        ]);

        Stok::create($request->all());
        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $stok = Stok::findOrFail($id);
        return view('stok.edit', compact('stok'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|numeric',
        ]);

        $stok = Stok::findOrFail($id);
        $stok->update($request->all());
        return redirect()->route('stok.index')->with('success', 'Stok berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $stok = Stok::findOrFail($id);
        $stok->delete();
        return redirect()->route('stok.index')->with('success', 'Stok berhasil dihapus.');
    }
}
