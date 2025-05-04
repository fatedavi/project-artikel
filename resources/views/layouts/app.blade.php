<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-lg font-semibold">My Laravel App1</a>
            <ul class="flex space-x-4 items-center">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/pinjam" class="hover:underline">Articles</a></li>
                <li><a href="/posts" class="hover:underline">Post</a></li>
                @auth
                @if (auth()->user()->role === 'user')
                    <li><a href="{{ route('pinjam.index') }}" class="hover:underline">List Buku</a></li>
                    <li><a href="{{ route('pinjam.list') }}" class="hover:underline">Buku Dipinjam</a></li> <!-- Tambahan -->
                @endif
            @endauth
                
            </ul>

            <div class="flex items-center space-x-4">
                @auth
                    <span>Hai, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:underline">Logout</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-white-500 hover:underline">Login</a>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-4">
        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>
