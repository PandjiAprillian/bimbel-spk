@extends('layouts.master')
@section('title', 'Alternatif ' . $alternative->nama);

@php
$biaya = [
"5" => "&uparrow; Rp. 3.500.000",
"4" => "Rp. 2.500.000 - Rp. 3.500.000",
"3" => "Rp. 1.500.000 - Rp. 2.500.000",
"2" => "&downarrow; Rp. 1.500.000"
];

$akreditasi = [
"5" => "A",
"3" => "B",
"1" => "C"
];

$fasilitas = [
"1" => "Tidak Lengkap",
"3" => "Cukup Lengkap",
"5" => "Sangat Lengkap"
];

$pengajar = [
"3" => "Lulusan D1/D2/D3",
"4" => "Lulusan S1",
"5" => "Lulusan S2"
];
@endphp

@section('content')
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h2 class="title p-2 text-center rounded shadow">Data Bimbel {{ $alternative->nama }}</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <th>Nama Bimbel</th>
                            <th>Alamat</th>
                            <th>Biaya</th>
                            <th>Akreditasi</th>
                            <th>Fasilitas</th>
                            <th>Pengajar</th>
                        </thead>
                        <tbody>
                            <td>{{ $alternative->nama }}</td>
                            <td>{{ $alternative->alamat }}</td>
                            @foreach ($biaya as $key => $c1)
                            @if ($key === $alternative->score->c1)
                            <td>{!! $c1 !!}</td>
                            @endif
                            @endforeach
                            @foreach ($akreditasi as $key => $c2)
                            @if ($key === $alternative->score->c2)
                            <td>{{ $c2 }}</td>
                            @endif
                            @endforeach
                            @foreach ($fasilitas as $key => $c3)
                            @if ($key === $alternative->score->c3)
                            <td>{{ $c3 }}</td>
                            @endif
                            @endforeach
                            @foreach ($pengajar as $key => $c4)
                            @if ($key === $alternative->score->c4)
                            <td>{{ $c4 }}</td>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('alternatives.edit', ['alternative' => $alternative->id]) }}"
                        class="btn btn-danger btn-block">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
