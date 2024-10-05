<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Larkon - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    @filamentStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>

<body>

    <x-dashboard.header />

    {{-- The main content with `full-width` --}}
    <x-mary-main with-nav full-width>

        {{-- This is a sidebar that works also as a drawer on small screens --}}
        {{-- Notice the `main-drawer` reference here --}}
        <x-admin.sidebar />

        {{-- The `$slot` goes here --}}
        <div class="p-1 overflow-y-scroll">
            <x-slot:content>
                {{ $slot }}
            </x-slot:content>
        </div>
    </x-mary-main>

    {{--  TOAST area --}}
    <x-mary-toast />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    @filamentScripts
    @livewireScripts
    @stack('js')

</body>

</html>
