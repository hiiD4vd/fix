@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('page-title', 'Tambah Produk')

@section('content')
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori_id" class="form-control">
                @foreach ($kategori as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="diskon">Diskon (%)</label>
            <input type="number" name="diskon" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
