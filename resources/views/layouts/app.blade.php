<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Mini System</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-pzjw8V+F2uT6Ij/h8y6d3Xq6b/nro21p1fjcqy1t3Jg4jXERwlwFwOES4YaSmd3M" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Simple Management</a>
                <!-- Add your navigation menu items here -->
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 bg-light">
        <div class="container py-3">
            <p class="text-center">Your footer content here</p>
        </div>
    </footer>

    <!-- Add Bootstrap JS link -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-pzjw8V+F2uT6Ij/h8y6d3Xq6b/nro21p1fjcqy1t3Jg4jXERwlwFwOES4YaSmd3M" crossorigin="anonymous">
    </script>
</body>

</html>
