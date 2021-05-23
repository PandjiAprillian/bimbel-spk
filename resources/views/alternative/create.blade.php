@extends('layouts.master')
@section('title', 'Data Alternatif Baru');

@section('content')
<div class="container mt-5">
    <div class="row mb-3 justify-content-center">
        <h2>Tambah Data Alternatif Baru</h2>
    </div>
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('alternatives.store') }}" method="post">
                    @include('alternative.form', ['button' => 'Tambah'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
