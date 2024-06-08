<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application Name</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
    @auth

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger" type="submit">LogOut</button>
    </form>
    @yield('content')
    @endauth

    <!-- Include Bootstrap's JavaScript file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
