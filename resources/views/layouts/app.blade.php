
<!DOCTYPE html>
<html lang="{{ app()->currentLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Application Assets -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">

        {{-- Navigation Section --}}
        @include('layouts.navigation', [], false)

        {{-- Header Section --}}
        @isset($header)
            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        {{-- Main Content --}}
        <main>
            {{ $slot }}
        </main>

    </div>

</body>
</html>


