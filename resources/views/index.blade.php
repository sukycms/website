@extends('layouts.base')

@section('content')

    <section class="flex flex-col lg:flex-row justify-between items-center lg:mt-12">

        <div class="w-full lg:w-1/2 lg:pr-12">
            <p class="text-5xl">Suky<i class="fas fa-heart text-red-600"></i>CMS</p>
            <h1 class="font-light text-3xl my-4">El gestor gratuito <br>para asociaciones de animales</h1>

            <p class="text-sm mt-8 mb-6 italic">SukyCMS es un software de gestión gratuito para asociaciones protectoras de animales. Crea la página web para la asociación con la que colaboras en cuestión de segundos y empieza a gestionarla.</p>

            <form action="{{ route('newsletter') }}" method="POST">
                @csrf

                <x-alert>
                    <p class="font-semibold">{{ __('page.newsletter.title') }}</p>
                    <p class="text-sm">{{ __('page.newsletter.text') }}</p>
                </x-alert>

                <div class="flex items-center -mx-2">
                    <div class="w-2/3 px-2">
                        <x-forms.input :placeholder="__('page.newsletter.email')" required></x-forms.input>
                    </div>
                    <div class="w-1/3 px-2">
                        <x-submit-button class="w-full mt-4">{{ __('page.newsletter.submit') }}</x-submit-button>
                    </div>
                </div>
            </form>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center">
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_m3lpL4.json" background="transparent" speed="0.5" style="width: 100%; height: 100%; max-width: 400px;" loop autoplay></lottie-player>
        </div>

    </section>

@endsection
