@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('page-title', 'Daftar Kategori')

@section('content')
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>
                        {{-- <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning">Edit</a> --}}
                        {{-- <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
