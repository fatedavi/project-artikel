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
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/pinjam" class="hover:underline">Articles</a></li>
                <li><a href="/posts" class="hover:underline">Post</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>

</body>
</html>
