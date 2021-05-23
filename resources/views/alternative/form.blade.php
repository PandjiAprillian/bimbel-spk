@csrf

<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="nama">Nama</label>
            <input type="tel" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
            @error('nama')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="col">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3">{{ old('alamat') }}</textarea>
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
            <select class="form-control" id="biaya">
                <option value="5"> &uparrow; Rp. 3.500.000</option>
                <option value="4">Rp. 2.500.000 - Rp. 3.500.000</option>
                <option value="3">Rp. 1.500.000 - Rp. 2.500.000</option>
                <option value="2"> &downarrow; Rp. 1.500.000</option>
            </select>
            @error('biaya')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="col">
            <label for="akreditasi">Akreditas Bimbel (C2)</label>
            <select class="form-control" id="akreditasi">
                <option value="5">A</option>
                <option value="3">B</option>
                <option value="1">C</option>
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
            <select class="form-control" id="fasilitas">
                <option value="1">Tidak Lengkap</option>
                <option value="3">Cukup Lengkap</option>
                <option value="5">Sangat Lengkap</option>
            </select>
            @error('fasilitas')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
        <div class="col">
            <label for="pengajar">Pengajar Bimbel (C4)</label>
            <select class="form-control" id="pengajar">
                <option value="3">Lulusan D1/D2/D3</option>
                <option value="4">Lulusan S1</option>
                <option value="5">Lulusa S2</option>
            </select>
            @error('pengajar')
            <small class="form-text text-danger">
                <strong>{{ $message }}</strong>
            </small>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <button class="btn btn-success btn-block">{{ $button }}</button>
</div>
