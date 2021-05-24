@extends('layouts.master')
@section('title', 'Data Alternatif');

@section('content')
<div class="container pt-5">
    <div class="row justify-content-between">
        <h1>Data Alternatif</h1>
        @auth
        <a href="{{ route('alternatives.create') }}" class="btn btn-sm btn-danger align-self-center">Tambah Alternatif</a>
        @endauth
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
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
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alternative->nama }}</td>
                    <td>{{ $alternative->alamat }}</td>
                    <td>coba</td>
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
