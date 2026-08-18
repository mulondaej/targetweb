<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    @vite('resources/css/app.css')
</head>
<body class="verify-page">
    <div class="verify-card">
        <h1 class="verify-title">Verify your email</h1>

        <p class="verify-copy">
            Before you can continue, please verify your email address.
        </p>

        @if (session('message'))
            <div class="verify-alert">
                {{ session('message') }}
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}" class="verify-form">
            @csrf
            <button type="submit" class="verify-button">
                Resend verification email
            </button>
        </form>

        <div class="verify-meta">
            <a href="{{ route('logout') }}" class="verify-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Log out
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden-form">
            @csrf
        </form>
    </div>
</body>
</html>
