<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mulse') }}</title>

    @if (!empty($contact->favicon))
        <link rel="icon" type="image/x-icon" href="{{ asset($contact->favicon) }}">
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js"></script>

    {{-- tailwind untuk production --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- Animasi Loading --}}
    <div id="admin-loader" class="fixed inset-0 z-[1000] flex items-center justify-center bg-white">
        <div class="w-12 h-12 border-4 border-green-700 border-t-transparent rounded-full animate-spin"></div>
    </div>

    @include('admin.layouts.partials.header')
    <div class="flex">
        @include('admin.layouts.partials.sidebar')

        <!-- Konten Utama -->
        <main class="flex-1 min-w-0 p-6 bg-gray-100 min-h-[90vh] relative">
            @include('components.breadcrumb')
            @yield('content')
            <div class="py-5"></div>
            @include('admin.layouts.partials.footer')
        </main>
    </div>

    {{-- Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('admin-loader');
            if (loader) {
                setTimeout(() => {
                    loader.style.opacity = '0';
                    loader.style.pointerEvents = 'none';
                    setTimeout(() => loader.remove(), 1000); // animasi fade out
                }, 250); // delay sebelum menghilangkan loader
            }
        });
    </script>
</body>

</html>
