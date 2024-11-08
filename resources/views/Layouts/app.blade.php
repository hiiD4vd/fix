<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan link ke file CSS Anda jika perlu -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Pastikan konten utama minimal memenuhi tinggi layar */
        html,
        body {
            height: 100%;
        }

        /* Mengatur tinggi minimal untuk konten agar footer tetap di bawah */
        .content-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">


        <!-- Content -->
        <main role="main" class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('produk.index') }}">
                                    <i class="fas fa-box"></i> Produk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('kategori.index') }}">
                                    <i class="fas fa-tags"></i> Kategori
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stok.index') }}">
                                    <i class="fas fa-truck"></i> Stok
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('diskon.index') }}">
                                    <i class="fas fa-percentage"></i> Diskon
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('transaksi.index') }}">
                                    <i class="fas fa-percentage"></i> Tranksaksi
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">@yield('page-title')</h1>
                    </div>

                    @yield('content')
                </main>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-dark text-white text-center">
            <div class="container">
                <div class="row mt-3">
                    <div class="col text-center">
                        <span>&copy; 2024 MyApp.UdahPintar.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Tambahkan script JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Tambahkan script JS Anda jika perlu -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
