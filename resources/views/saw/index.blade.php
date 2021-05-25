@extends('layouts.master')
@section('title', 'SAW')

@section('content')
<div class="container pt-5 mt-4">
    <div class="row justify-content-between">
        <div class="col">
            <h4 class="title text-center p-2 rounded">Hasil SAW</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Bimbel</th>
                        <th>Ranking</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($results as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['alternative']}}</td>
                        <td>{{ $item['score'] }}</td>
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
</div>
@endsection
