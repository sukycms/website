@extends('layouts.base')

@section('content')

    <section class="hero">

        <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center mt-12">

            <div class="w-full lg:w-1/2 lg:pr-12 text-center lg:text-left">
                <p class="text-4xl md:text-5xl">Suky<i class="fas fa-heart text-red-600"></i>CMS</p>
                <h1 class="font-light text-xl md:text-3xl my-4">El gestor gratuito <br>para asociaciones de animales</h1>

                <p class="text-sm mt-8 mb-6 italic">El proyecto se encuentra en desarrollo y será lanzado a finales de este año 2020.</p>

                <form action="{{ route('newsletter') }}" method="POST">
                    @csrf

                    <x-alert>
                        <p class="font-semibold">{{ __('page.newsletter.title') }}</p>
                        <p class="text-sm">{{ __('page.newsletter.text') }}</p>
                    </x-alert>

                    <div class="flex flex-col sm:flex-row items-center -mx-2">
                        <div class="w-full sm:w-2/3 px-2">
                            <x-forms.input name="email" :placeholder="__('page.newsletter.email')" required></x-forms.input>
                        </div>
                        <div class="w-full sm:w-1/3 px-2">
                            <x-forms.submit-button class="w-full mt-6">{{ __('page.newsletter.submit') }}</x-forms.submit-button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="w-full lg:w-1/2 flex justify-center my-12 lg:my-0">
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_m3lpL4.json" background="transparent" speed="0.5" style="width: 100%; height: 100%; max-width: 400px;" loop autoplay></lottie-player>
            </div>

        </div>

    </section>

    <section class="features bg-gray-200 py-24 lg:mt-32">

        <div class="container mx-auto flex flex-wrap flex-col lg:flex-row justify-between items-center">

            <h2 class="font-semibold text-3xl text-center w-full mb-12">{!! __('page.features.title') !!}</h2>

            <div class="flex flex-wrap flex-col lg:flex-row justify-between -mx-6">
                <div class="flex flex-col w-full lg:w-1/3 my-8 px-6">
                    <div class="flex flex-row items-center mb-4">
                        <i class="fas fa-check fa-fw text-blue-500 text-2xl mr-4"></i>
                        <p class="text-xl font-semibold">{{ __('page.features.easy.title') }}</p>
                    </div>
                    <p>{{ __('page.features.easy.description') }}</p>
                </div>
                <div class="flex flex-col w-full lg:w-1/3 my-8 px-6">
                    <div class="flex flex-row items-center mb-4">
                        <i class="fas fa-paw fa-fw text-blue-500 text-2xl mr-4"></i>
                        <p class="text-xl font-semibold">{{ __('page.features.specialized.title') }}</p>
                    </div>
                    <p>{{ __('page.features.specialized.description') }}</p>
                </div>
                <div class="flex flex-col w-full lg:w-1/3 my-8 px-6">
                    <div class="flex flex-row items-center mb-4">
                        <i class="fas fa-euro-sign fa-fw text-blue-500 text-2xl mr-4"></i>
                        <p class="text-xl font-semibold">{{ __('page.features.free.title') }}</p>
                    </div>
                    <p>{{ __('page.features.free.description') }}</p>
                </div>
                <div class="flex flex-col w-full lg:w-1/3 my-8 px-6">
                    <div class="flex flex-row items-center mb-4">
                        <i class="fas fa-sync-alt fa-fw text-blue-500 text-2xl mr-4"></i>
                        <p class="text-xl font-semibold">{{ __('page.features.updates.title') }}</p>
                    </div>
                    <p>{{ __('page.features.updates.description') }}</p>
                </div>
                <div class="flex flex-col w-full lg:w-1/3 my-8 px-6">
                    <div class="flex flex-row items-center mb-4">
                        <i class="fas fa-cogs fa-fw text-blue-500 text-2xl mr-4"></i>
                        <p class="text-xl font-semibold">{{ __('page.features.custom.title') }}</p>
                    </div>
                    <p>{{ __('page.features.custom.description') }}</p>
                </div>
                <div class="flex flex-col w-full lg:w-1/3 my-8 px-6">
                    <div class="flex flex-row items-center mb-4">
                        <i class="fas fa-globe-europe fa-fw text-blue-500 text-2xl mr-4"></i>
                        <p class="text-xl font-semibold">{{ __('page.features.opensource.title') }}</p>
                    </div>
                    <p>{{ __('page.features.opensource.description') }}</p>
                </div>
            </div>

        </div>

    </section>

    <section class="team pt-20 pb-24">

        <div class="container mx-auto flex flex-wrap flex-col lg:flex-row justify-between items-center">

            <h2 class="font-semibold text-3xl text-center w-full mb-12">{!! __('page.team.title') !!}</h2>

            <div class="flex flex-col lg:flex-row justify-around -mx-4 text-center">
                <div class="team-member w-full lg:w-1/5 px-4 py-8 lg:py-0 border-b border-gray-200 lg:border-0">
                    <img src="{{ asset('images/suky.png') }}" alt="Suky" class="rounded-full mx-auto mb-4">
                    <p class="text-lg mb-2">Suky</p>
                    <p class="text-sm">{{ __('page.team.suky') }}</p>
                </div>
                <div class="team-member w-full lg:w-1/5 px-4 py-8 lg:py-0 border-b border-gray-200 lg:border-0">
                    <img src="{{ asset('images/ahri.png') }}" alt="Ahri" class="rounded-full mx-auto mb-4">
                    <p class="text-lg mb-2">Ahri</p>
                    <p class="text-sm">{{ __('page.team.ahri') }}</p>
                </div>
                <div class="team-member w-full lg:w-1/5 px-4 py-8 lg:py-0 border-b border-gray-200 lg:border-0">
                    <img src="{{ asset('images/jaimesares.png') }}" alt="Jaime Sares" class="rounded-full mx-auto mb-4">
                    <p class="text-lg mb-2">Jaime Sares</p>
                    <p class="text-sm">{{ __('page.team.jaime') }}</p>
                    <div class="flex flex-row mt-4 items-center justify-center text-gray-700">
                        <a href="https://twitter.com/jaimesares" target="_blank"><i class="fab fa-twitter fa-fw"></i></a>
                        <a href="mailto:jaimesares@gmail.com"><i class="fas fa-envelope fa-fw mx-4"></i></a>
                        <a href="https://jaimesares.com" target="_blank"><i class="fas fa-link fa-fw"></i></a>
                    </div>
                </div>
                <div class="team-member w-full lg:w-1/5 px-4 py-8 lg:py-0 border-b border-gray-200 lg:border-0">
                    <img src="{{ asset('images/kata.png') }}" alt="Kata" class="rounded-full mx-auto mb-4">
                    <p class="text-lg mb-2">Kata</p>
                    <p class="text-sm">{{ __('page.team.kata') }}</p>
                </div>
                <div class="team-member w-full lg:w-1/5 px-4 py-8 lg:py-0 border-b border-gray-200 lg:border-0">
                    <img src="{{ asset('images/lisa.png') }}" alt="Lisa" class="rounded-full mx-auto mb-4">
                    <p class="text-lg mb-2">Lisa</p>
                    <p class="text-sm">{{ __('page.team.lisa') }}</p>
                </div>
            </div>

        </div>

    </section>

    <section class="more-info py-24 text-center items-center">

        <x-link href="mailto:{{ config('sukycms.email') }}" class="rounded-full text-xl px-8 py-4">{{ __('page.more-info.link') }}</x-link>

    </section>

@endsection
