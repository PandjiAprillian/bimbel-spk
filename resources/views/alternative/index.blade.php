@extends('layouts.master')
@section('title', 'Data Alternatif');

@section('content')
<div class="container pt-5">
    <h1>Data Alternatif</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
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
@endsection
