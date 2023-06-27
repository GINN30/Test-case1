<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <!-- Your navigation menu code here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer code here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
