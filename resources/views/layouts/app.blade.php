<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Mini System</title>
    <!-- include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.min.css') }}">
</head>

<body>
    <header>
        <ul class="nav justify-content-center bg-dark nav-lg">
            <li class="nav-item">
                <a class="nav-link active text-white" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('karyawan.index') }}">Karyawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('cuti.index') }}">Cuti</a>
            </li>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 bg-light">
        <div class="container py-3">
            <p class="text-center fw-bold text-uppercase">Adya Ginansah</p>
        </div>
    </footer>

    <!-- include jQuery and Popper.js -->
    <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('popper.js/dist/umd/popper.min.js') }}"></script>
    <!-- include Bootstrap JS -->
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>

</html>
