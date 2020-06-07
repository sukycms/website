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
<body class="auth">

    <div class="container mx-auto">

        <div class="flex flex-col">

            <img src="{{ asset('images/logo.png') }}" alt="SukyCMS" class="w-32 mx-auto my-12">
            <div class="w-full lg:w-3/5 mx-auto p-8 rounded-lg">

                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf

                    <x-forms.input name="email" :placeholder="__('page.forms.email')" id="email" type="email" required>
                        {{ __('page.forms.email') }}
                    </x-forms.input>

                    <x-forms.input name="password" :placeholder="__('page.forms.password')" id="password" type="password" required>
                        {{ __('page.forms.password') }}
                    </x-forms.input>

                    <div class="flex justify-end">
                        <x-forms.submit-button class="mt-4">{{ __('page.forms.login') }}</x-forms.submit-button>
                    </div>
                </form>
            </div>

        </div>

    </div>


    <!-- Scripts -->
    <script src="{{ mix('build/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <x-notification></x-notification>

    @stack('scripts')
</body>
</html>
