<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Targets</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1><a href="/">TargetWeb</a></h1>

            <div>
                <a href="{{ route('targets.index') }}">All Targets</a> | 
                @auth
                    <a href="{{ route('targets.create') }}">Create Target</a>       
                @endauth
            </div>
            
            <div id="connect">
                @guest
                    <a href="{{ route('register') }}" class="connectBtn">Register</a> | 
                    <a href="{{ route('login') }}" class="connectBtn">Login</a>
                @endguest
            </div>
            
            @auth
                <span class="">
                    Hello, <a href="">{{ Auth::user()->name }}</a>
                </span>

                <a href=""></a>
           
                <form action="{{ route('logout') }}" method="POST" class="m-8">
                    @csrf
                    <button class="btn btn-primary">Logout</button>
                </form>
            @endauth

        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>