<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | TargetWeb</title>
    <link rel="icon" type="image/jpeg" href="resources/img/targetweb.test.jpeg">

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <div class="page-shell">
    <section class="hero">
        <h1>Welcome to TargetWeb</h1>
        <p class="text-center">Keep up with yourselves.</p>

        @auth
        <a href="/targets" class="btn-primary mt-6">Find Targets</a>
        @endauth

        @guest
        <a href="{{ route('show.register') }}" class="btn-primary mt-6">Register</a>
        <a href="{{ route('show.login') }}" class="btn-primary mt-6">Login</a>
        @endguest
    </section>

</div>
</body>
</html>