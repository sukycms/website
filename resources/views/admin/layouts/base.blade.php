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
<body class="admin bg-gray-300">

    <x-admin.header/>

    <div class="container mx-auto">
        <div class="flex flex-row">
            <x-admin.sidebar class="w-64"></x-admin.sidebar>

            <div class="content flex flex-col flex-1 p-8">
                @yield('content')
            </div>
        </div>
    </div>

    <x-admin.footer/>

    <!-- Scripts -->
    <script src="{{ mix('build/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <x-notification></x-notification>

    @stack('scripts')
</body>
</html>
