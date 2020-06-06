<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ __('page.title') }}</title>
    <meta name="description" content="">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('build/app.css') }}">
    @stack('styles')
</head>
<body>

    <x-header/>

    <div class="container mx-auto">
        @yield('content')
    </div>

    <x-footer/>

    <!-- Scripts -->
    <script src="{{ mix('build/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    @stack('scripts')
</body>
</html>