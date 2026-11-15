
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') ?: 'Laravel' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
          rel="stylesheet">

    <!-- Application Assets -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="font-sans antialiased text-gray-900">

    <main class="min-h-screen flex flex-col items-center justify-center
                 pt-6 sm:pt-0 bg-gray-100">

        <!-- Application Logo -->
        <div class="mb-2">
            <a href="{{ url('/') }}">
                <x-application-logo
                    class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </div>

        <!-- Guest Content -->
        <section class="w-full sm:max-w-md px-6 py-4 mt-6
                        bg-white shadow-md overflow-hidden sm:rounded-lg">

            {{ $slot }}

        </section>

    </main>

</body>
</html>

