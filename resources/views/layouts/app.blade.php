<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="md:w-9/12 w-full mx-auto bg-blue-200">
    <main>
        <div>
            <h1 class="text-7xl text-center py-6"><a href="/posts">My Blog</a></h1>
        </div>
        <div>
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
