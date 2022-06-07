<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('meta_description')"/>
<meta name="keywords" content=""/>

{{-- Facebook Meta --}}
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ config('app.url') }}/@yield('og:image')">
<meta property="og:title" content="@yield('og:title')" />

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/drop-down.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<title>@yield('tittle', 'Mytia')</title>

@livewireStyles