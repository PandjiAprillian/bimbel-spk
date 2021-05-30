@extends('layouts.master')
@section('title', 'Nilai Alternatif')

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
<div class="container pt-5 mt-4">
    <div class="row">
        <div class="col">
            <h1>Nilai Alternatif</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <h5 class="bg-dark text-light text-center p-2 rounded">Penjelasan Kriteria</h5>
            @include('score.accordion-nilai')
        </div>
        <div class="col table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Bimbel</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>Ubah Kriteria</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($scores as $score)
                    <tr>
                        <td>{{ $scores->firstItem() + $loop->iteration - 1 }}</td>
                        <td>{{ $score->alternative->nama }}</td>
                        <td>{{ $score->c1 }}</td>
                        <td>{{ $score->c2 }}</td>
                        <td>{{ $score->c3 }}</td>
                        <td>{{ $score->c4 }}</td>
                        <td>
                            <a href="{{ route('alternatives.edit', ['alternative' => $score->alternative->id]) }}"
                                class="btn btn-success btn-sm">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="bg-info" colspan="6">Tidak ada data...</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    {{ $scores->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
