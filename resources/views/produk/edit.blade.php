@extends('layouts.app')

@section('title', 'Edit Produk')

@section('page-title', 'Edit Produk')

@section('content')
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori_id" class="form-control">
                @foreach($kategori as $kat)
                    <option value="{{ $kat->id }}" {{ $produk->kategori_id == $kat->id ? 'selected' : '' }}>
                        {{ $kat->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $produk->stok->stok }}" required>
        </div>
        <div class="form-group">
            <label for="diskon">Diskon (%)</label>
            <input type="number" name="diskon" class="form-control" value="{{ $produk->diskon ? $produk->diskon->persen_diskon : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
