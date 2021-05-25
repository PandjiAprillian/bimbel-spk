@extends('layouts.master')
@section('title', 'Edit Data ' . $alternative->nama);
@php
$previousURLExplode = explode("/", url()->previous());
$url = end($previousURLExplode);
@endphp

@section('content')
<div class="container mt-5">
    <div class="row mb-3 justify-content-center">
        <h2>
            {{ is_numeric($url) ? "Edit Data Alternatif  $alternative->nama" : "Edit Nilai Alternatif $alternative->nama" }}
        </h2>
    </div>
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('alternatives.update', ['alternative' => $alternative->id]) }}" method="POST">
                    @method('PATCH')
                    @include('alternative.form', ['button' => 'Ubah'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
