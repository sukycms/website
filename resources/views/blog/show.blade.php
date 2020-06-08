@extends('layouts.base')

@section('content')

    <div class="blog container mx-auto my-12">
        <div class="flex blog-post">
            <div class="w-3/5 mx-auto">
                <h1 class="text-3xl font-semibold">
                    {{ $post->title }}
                </h1>

                <p class="flex items-center">Escrito por <img src="{{ asset('images/jaimesares.jpg') }}" alt="" class="w-8 rounded-full mx-2"> Jaime Sares el {{ $post->published_at->format('d/m/Y') }}</p>

                <div class="mb-8"></div>

                {!! $post->content !!}
            </div>
        </div>
    </div>

@endsection
