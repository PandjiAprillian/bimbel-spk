<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Kriteria C1
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Biaya</th>
                        <th>Nilai</th>
                    </thead>
                    <tbody>
                        @foreach ($biaya as $key => $c1)
                        <tr>
                            <td>{!! $c1 !!}</td>
                            <td>{{ $key }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Kriteria C2
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Akreditasi</th>
                        <th>Nilai</th>
                    </thead>
                    <tbody>
                        @foreach ($akreditasi as $key => $c2)
                        <tr>
                            <td>{{ $c2 }}</td>
                            <td>{{ $key }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Kriteria C3
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Fasilitas</th>
                        <th>Nilai</th>
                    </thead>
                    <tbody>
                        @foreach ($fasilitas as $key => $c3)
                        <tr>
                            <td>{{ $c3 }}</td>
                            <td>{{ $key }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Kriteria C4
                </button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Pengajar</th>
                        <th>Nilai</th>
                    </thead>
                    <tbody>
                        @foreach ($pengajar as $key => $c4)
                        <tr>
                            <td>{{ $c4 }}</td>
                            <td>{{ $key }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
