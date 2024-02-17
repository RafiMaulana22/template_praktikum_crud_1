<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('') }}assets/"
    data-template="vertical-menu-template-free"
>
    <head>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>{{ $title }} | Praktikum CRUD</title>

        <meta name="description" content="" />

        <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicon/favicon.ico" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
        />

        <link rel="stylesheet" href="{{ asset('') }}assets/vendor/fonts/boxicons.css" />

        <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('') }}assets/css/demo.css" />

        <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

        <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/apex-charts/apex-charts.css" />

        <script src="{{ asset('') }}assets/vendor/js/helpers.js"></script>

        <script src="{{ asset('') }}assets/js/config.js"></script>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <b>CRUD Praktikum</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/jurusan">Data Jurusan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-3">

            @yield('content')

        </div>

        <script src="{{ asset('') }}assets/vendor/libs/jquery/jquery.js"></script>
        <script src="{{ asset('') }}assets/vendor/libs/popper/popper.js"></script>
        <script src="{{ asset('') }}assets/vendor/js/bootstrap.js"></script>
        <script src="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="{{ asset('') }}assets/vendor/js/menu.js"></script>

        <script src="{{ asset('') }}assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <script src="{{ asset('') }}assets/js/main.js"></script>

        <script src="{{ asset('') }}assets/js/dashboards-analytics.js"></script>

        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
