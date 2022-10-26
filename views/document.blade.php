<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('turbo-livewire/turbo-livewire.css') }}" @turbolinksTrackReload>
    @yield('head')
    <script src="{{ asset('turbo-livewire/turbo-livewire.js') }}" defer @turbolinksTrackReload></script>
    @livewireStyles
    @stack('css')
</head>
<body class="@yield('body_class')">
    @yield('body')
    @stack('scripts')
    @livewireScripts
    @stack('js')
    @yield('footer')
</body>
</html>
