@extends('layouts.app')

@section('title', 'Daftar Stok')

@section('page-title', 'Daftar Stok')

@section('content')
    <a href="{{ route('stok.create') }}" class="btn btn-primary mb-3">Tambah Stok</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $item)
                <tr>
                    <td>{{ $item->jumlah }}</td>
                    <td>
                        <a href="{{ route('stok.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('stok.destroy', $item->id) }}" method="POST" style="display:inline;">
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
