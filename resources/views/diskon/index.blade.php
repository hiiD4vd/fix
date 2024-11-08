@extends('layouts.app')

@section('title', 'Daftar Diskon')

@section('page-title', 'Daftar Diskon')

@section('content')
    <a href="{{ route('diskon.create') }}" class="btn btn-primary mb-3">Tambah Diskon</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Persentase</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diskon as $item)
                <tr>
                    <td>{{ $item->persentase }}%</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('diskon.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('diskon.destroy', $item->id) }}" method="POST" style="display:inline;">
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
