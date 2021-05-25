@extends('layouts.master')
@section('title', 'Data Bobot');

@section('content')
<div class="container pt-5">
    <div class="row justify-content-between">
        <div class="col">
            <h1>Data Bobot</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    Dari setiap kriteria yang digunakan, semuanya akan diberikan nilai bobot
                </div>
            </div>
        </div>
        <div class="col">
            <form action="{{ route('weights.update', ['weight' => $weight->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th colspan="4">Bobot</th>
                        </tr>
                        <tr>
                            <th>W1</th>
                            <th>W2</th>
                            <th>W3</th>
                            <th>W4</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($weight)
                        <tr>
                            <td>
                                <input readonly class="form-control weight" name="w1" value="{{ $weight->w1 }}">
                                @error('w1')
                                    <small class="form-text text-danger">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </td>
                            <td>
                                <input readonly class="form-control weight" name="w2" value="{{ $weight->w2 }}">
                                @error('w2')
                                    <small class="form-text text-danger">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </td>
                            <td>
                                <input readonly class="form-control weight" name="w3" value="{{ $weight->w3 }}">
                                @error('w3')
                                    <small class="form-text text-danger">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </td>
                            <td>
                                <input readonly class="form-control weight" name="w4" value="{{ $weight->w4 }}">
                                @error('w4')
                                    <small class="form-text text-danger">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td class="bg-info" colspan="5">Tidak ada data...</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <button class="btn btn-danger btn-block">Ubah Bobot</button>
            </form>
        </div>
    </div>
</div>
@endsection
