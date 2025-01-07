<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to the Dashboard</h1>
        <p>Hello!</p>
        {{-- <p>Your role: {{ $role }}</p> --}}
        
        @if(Auth::user()->role === 'Admin')
            <p>You have access to manage the entire system.</p>
        @elseif(Auth::user()->role === 'Dokter')
            <p>You can view and manage patient records.</p>
        @endif
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
