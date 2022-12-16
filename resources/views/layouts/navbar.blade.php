<!-- navbar -->
<div class="navigation w-100">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <i class="fas fa-info-circle"></i> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" id="home">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">BUAT PERIJINAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Daftar Untuk Perorangan</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}">Daftar Untuk Badan Hukum</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">PERIJINAN DAN SYARAT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item_sub dropdown-submenu">
                                <a class="dropdown-item" href="#" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">Perijinan dan Syarat <i
                                        class="fas fa-angle-right"></i>
                                </a>
                                <ul class="dropdown-submenu1" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('reklame') }}"> Perubahan Rencana <p>Peruntukan Lokasi </p>
                                        </a>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('home') }}">FATWA PLANOLOGI </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('home') }}">Lahan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('home') }}">Penyelenggaraan Reklame V2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}"></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" id="regulasi">
                        <a class="nav-link" href="{{ route('regulasi') }}">REGULASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="berita" href="{{ route('kontak') }}">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
{{-- navbar --}}
