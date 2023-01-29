<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- flowbite --}}
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    {{-- alpinejs --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white">
    <x-flash-message />
    <nav class="sticky top-0 bg-white z-40">
        <x-menu />


    </nav>
    <main>
        @yield('content')
    </main>
    <div>
        <x-sconto />
        <x-links />
        <x-footer />

    </div>

</body>

</html>
