<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Bimbel SPK')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bimbel SPK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->is("/") ? "active" : "" }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is("alternatives") ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('alternatives.index') }}">Data Alternatif</a>
                    </li>
                    @auth
                    <li class="nav-item {{ request()->is("nilai") ? "active" : "" }}">
                        <a class="nav-link" href="#">Nilai Alternatif</a>
                    </li>
                    <li class="nav-item {{ request()->is("bobot") ? "active" : "" }}">
                        <a class="nav-link" href="#">Bobot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SAW</a>
                    </li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nama }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                <!-- End Right Side Of Navbar -->
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Contents --}}
    @yield('content')
    {{-- End Contents --}}

    @if (request()->is('/'))
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid" style="height: 100vh;">
        <div class="container pt-5">
            <div class="row flex-sm-row flex-column">
                <div class="col d-flex flex-column justify-content-center">
                    <h2>Sistem Penunjang Keputusan Bimbel</h2>
                    <p class="lead">Dengan Anggota Kelompok :</p>
                    <ol>
                        <li>Rafita Suci</li>
                        <li>Pandji Aprillian Pamungkas</li>
                        <li>Daya Firmansyah</li>
                        <li>Muhamad Syafa</li>
                    </ol>
                </div>
                <div class="col">
                    <img src="{{ asset('img/study.svg') }}" alt="Bimbel Terbaik" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    {{-- End Jumbotron --}}

    {{-- Cards Member --}}
    <div class="container card-members">
        <div class="row justify-content-center m-3">
            <div class="card shadow-sm" style="width: 70%">
                <div class="card-body">
                    <div class="row justify-content-around align-items-center">
                        <div class="col text-center">
                            <img src="{{ asset('img/rafita.png') }}" alt="rafita"
                                class="img-fluid rounded-circle shadow" width="150em">
                        </div>
                        <div class="col">
                            <h5>Rafita Suci</h5>
                            <h6>19182414</h6>
                            <h6>Sistem Informasi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <div class="card shadow-sm" style="width: 70%">
                <div class="card-body">
                    <div class="row justify-content-around align-items-center">
                        <div class="col text-center">
                            <img src="{{ asset('img/pandji.png') }}" alt="rafita"
                                class="img-fluid rounded-circle shadow" width="150em">
                        </div>
                        <div class="col">
                            <h5>Pandji Aprillian P</h5>
                            <h6>19182604</h6>
                            <h6>Sistem Informasi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <div class="card shadow-sm" style="width: 70%">
                <div class="card-body">
                    <div class="row justify-content-around align-items-center">
                        <div class="col text-center">
                            <img src="{{ asset('img/dafir.png') }}" alt="rafita" class="img-fluid rounded-circle shadow"
                                width="150em">
                        </div>
                        <div class="col">
                            <h5>Daya Firmansyah</h5>
                            <h6>19182523</h6>
                            <h6>Sistem Informasi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <div class="card shadow-sm" style="width: 70%">
                <div class="card-body">
                    <div class="row justify-content-around align-items-center">
                        <div class="col text-center">
                            <img src="{{ asset('img/safa.png') }}" alt="rafita" class="img-fluid rounded-circle shadow"
                                width="150em">
                        </div>
                        <div class="col">
                            <h5>Muhamad Syafa</h5>
                            <h6>19182339</h6>
                            <h6>Sistem Informasi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Cards Member --}}
    @endif

    {{-- Footer --}}
    {{-- <footer style="{{ (!request()->is('/')) ? "position: absolute; bottom: 0;" : "" }}">
        <div class="container">
            <div class="row justify-content-center align-items-center p-2">
                Made With Laravel
            </div>
        </div>
    </footer> --}}
    {{-- End Footer --}}

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
