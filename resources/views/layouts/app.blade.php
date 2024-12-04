<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">Attendance System</a>
            @if(Auth::check())
    <p>Welcome, {{ Auth::user()->fullname }}</p>
@else
    <p>Guest</p>
@endif

        </div>
    </nav>
    <main class="container mx-auto mt-5">
        @yield('content')
    </main>
</body>
</html>
