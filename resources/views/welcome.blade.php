<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Agents</title>
    <link rel="icon" type="image/jpeg" href="resources/img/agentsweb.jpg">

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <div class="page-shell">
    <section class="hero">
        <h1>Welcome to AgentsWeb</h1>
        <p class="text-center">Keep up with yourselves.</p>
        
        @auth
        <a href="/agents" class="btn-primary mt-6">Find Agents</a>
        @endauth

        @guest
        <a href="{{ route('register') }}" class="btn-primary mt-6">Register</a>
        <a href="{{ route('login') }}" class="btn-primary mt-6">Login</a>
        @endguest
    </section>

</div>
</body>
</html>