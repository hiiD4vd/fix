@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('page-title', 'Daftar Transaksi')

@section('content')
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Diskon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $item)
                <tr>
                    <td>{{ $item->produk->nama }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->produk->harga }}</td>
                    <td>{{ $item->jumlah * $item->produk->harga }}</td>
                    <td>{{ $item->diskon ? $item->diskon->persentase . '%' : 'Tidak ada' }}</td>
                    <td>
                        <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" style="display:inline;">
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
