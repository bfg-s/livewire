<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('turbo-livewire/turbo-livewire.css') }}" data-turbolinks-track="reload">
    @yield('head')
    @livewireStyles
    @stack('css')
</head>
<body>
    @yield('body')
    @stack('scripts')
    @livewireScripts
    <script src="{{ asset('turbo-livewire/turbo-livewire.js') }}" data-turbolinks-track="reload"></script>
    @stack('js')
    @yield('footer')
</body>
</html>
