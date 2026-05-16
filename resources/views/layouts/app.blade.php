<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus MRI - Mobile Medical Check-Up</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    <nav class="border-b border-gray-100">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold">Bus MRI</a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="/login" class="text-sm">Login</a>
                    <a href="/booking" class="px-4 py-2 text-sm text-white bg-blue-600 rounded">Booking</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
