<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        {{-- <a href="{{ route('register') }}">Register</a> --}}
        <div class="signup-link">
            <a href="{{ route('register') }}">Register</a></a>
        </div>
    </div>

    
</body>
</html>
