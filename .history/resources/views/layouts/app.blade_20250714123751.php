<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Mulse') }}</title>

    @if (!empty($contact->favicon))
        <link rel="icon" type="image/x-icon" href="{{ asset($contact->favicon) }}">
    @endif

    <link rel="alternate" hreflang="en" href="{{ url('/en') }}">
    <link rel="alternate" hreflang="id" href="{{ url('/id') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- tailwind untuk development --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <div id="edge-wrapper" class="not-edge">
        @include('layouts.partials.header')
        <main>
            @yield('content')
        </main>
        @include('layouts.partials.footer')
    </div>

    {{-- Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const isEdge = navigator.userAgent.includes("Edg");
            const wrapper = document.getElementById("edge-wrapper");
            if (wrapper) {
                wrapper.className = isEdge ? "edge" : "not-edge";
            }
        });
    </script>

</body>

</html>
