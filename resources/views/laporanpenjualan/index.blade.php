@extends('layouts.app')

@section('title', 'Daftar Laporan Penjualan')

@section('page-title', 'Daftar Laporan Penjualan')

@section('content')
    <a href="{{ route('laporan.create') }}" class="btn btn-primary mb-3">Tambah Laporan Penjualan</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Diskon</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $item)
                <tr>
                    <td>{{ $item->produk->nama }}</td>
                    <td>{{ $item->diskon ? $item->diskon->persentase . '%' : '-' }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->total_harga }}</td>
                    <td>
                        <a href="{{ route('laporan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laporan.destroy', $item->id) }}" method="POST" style="display:inline;">
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
