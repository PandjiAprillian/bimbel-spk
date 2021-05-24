@extends('layouts.master')
@section('title', 'Data Alternatif');

@section('content')
<div class="container pt-5">
    <div class="row justify-content-between">
        <h1>Data Alternatif</h1>
        @auth
        <a href="{{ route('alternatives.create') }}" class="btn btn-sm btn-danger align-self-center">Tambah
            Alternatif</a>
        @endauth
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>No.</th>
                    <th>Nama Bimbel</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($alternatives as $alternative)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $alternative->nama }}</td>
                    <td>{{ $alternative->alamat }}</td>
                    <td class="text-center">
                        <a href="{{ route('alternatives.edit', ['alternative' => $alternative->id]) }}"
                            class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('alternatives.destroy', ['alternative' => $alternative->id]) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-warning">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="bg-info" colspan="4">Tidak ada data...</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
