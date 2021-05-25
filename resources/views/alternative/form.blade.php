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

$previousURLExplode = explode("/", url()->previous());
$url = end($previousURLExplode);
@endphp

@csrf

<div class="form-group" {{ !is_numeric($url) ? 'hidden' : '' }}>
    <div class="row">
        <div class="col">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama"
                value="{{ (old('nama') ?? $alternative->nama ?? '') }}">
            @error('nama')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="col">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"
                name="alamat">{{ (old('alamat') ?? $alternative->alamat ?? '') }}</textarea>
            @error('alamat')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="biaya">Biaya Bimbel (C1)</label>
            <select class="form-control" id="biaya" name="biaya">
                @foreach ($biaya as $key => $c1)
                <option value="{{ $key }}"
                    {{ ((old('biaya') ?? $alternative->score->c1 ?? '') == $key) ? 'selected' : '' }}>{!! $c1 !!}
                </option>
                @endforeach
            </select>
            @error('biaya')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="col">
            <label for="akreditasi">Akreditas Bimbel (C2)</label>
            <select class="form-control" id="akreditasi" name="akreditasi">
                @foreach ($akreditasi as $key => $c2)
                <option value="{{ $key }}"
                    {{ ((old('akreditasi') ?? $alternative->score->c2 ?? '') == $key) ? 'selected' : '' }}>{{ $c2 }}
                </option>
                @endforeach
            </select>
            @error('akreditasi')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="fasilitas">Fasilitas Bimbel (C3)</label>
            <select class="form-control" id="fasilitas" name="fasilitas">
                @foreach ($fasilitas as $key => $c3)
                <option value="{{ $key }}"
                    {{ ((old('fasilitas') ?? $alternative->score->c3 ?? '') == $key) ? 'selected' : '' }}>{{ $c3 }}
                </option>
                @endforeach
            </select>
            @error('fasilitas')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="col">
            <label for="pengajar">Pengajar Bimbel (C4)</label>
            <select class="form-control" id="pengajar" name="pengajar">
                @foreach ($pengajar as $key => $c4)
                <option value="{{ $key }}"
                    {{ ((old('pengajar') ?? $alternative->score->c4 ?? '') == $key) ? 'selected' : '' }}>{{ $c4 }}
                </option>
                @endforeach
            </select>
            @error('pengajar')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
    </div>
</div>

<input type="hidden" name="url" value="{{ $url }}">

<div class="form-group">
    <button class="btn btn-danger btn-block">{{ $button }}</button>
</div>
