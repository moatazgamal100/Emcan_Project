<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
    <div class="w-100 vh-100 position-relative mt-5 p-5">
        <form class="bg-white shadow  w-50 mx-auto p-3 px-5 rounded-4" method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class=" mb-3">Login</h1>
            <div>
                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mt-2">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="mt-2 text-center">
                <button class="mt-3 mb-2 btn btn-dark text-white px-4 w-50" type="submit">Login</button>
                <p>Don't have an account?<a href="{{ route('register') }}">Register</a></p>

            </div>
        </form>
    </div>
</body>
</html>
