<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function index()
    {
        $diskon = Diskon::all();
        return view('diskon.index', compact('diskon'));
    }

    public function create()
    {
        return view('diskon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'persentase' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        Diskon::create($request->all());
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $diskon = Diskon::findOrFail($id);
        return view('diskon.edit', compact('diskon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'persentase' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        $diskon = Diskon::findOrFail($id);
        $diskon->update($request->all());
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $diskon = Diskon::findOrFail($id);
        $diskon->delete();
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil dihapus.');
    }
}
