@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('page-title', 'Daftar Produk')

@section('content')
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Diskon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->kategori ? $item->kategori->nama : 'Kategori tidak tersedia' }}</td>
                    <td>{{ $item->stok ? $item->stok->stok : 'Stok tidak tersedia' }}</td>
                    <td>{{ $item->diskon ? $item->diskon->persen_diskon . '%' : 'Tidak ada' }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
