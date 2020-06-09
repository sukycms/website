@extends('layouts.base')

@section('content')

    <div class="blog container mx-auto my-12">
        <div class="flex blog-post">
            <div class="w-full lg:w-3/5 mx-auto">
                <a href="{{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}">
                    <h1 class="text-3xl font-semibold mb-4">
                        {{ $post->title }}
                    </h1>
                </a>

                <p class="flex items-center text-sm">Escrito por <img src="{{ asset('images/jaimesares.jpg') }}" alt="" class="w-6 rounded-full mx-2"> Jaime Sares el {{ $post->published_at->format('d/m/Y') }}</p>

                <div class="blog-post-content mt-12 mb-6">
                    {!! $post->content !!}
                </div>

                <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>
    </div>

@endsection
