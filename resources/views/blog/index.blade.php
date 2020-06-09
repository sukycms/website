@extends('layouts.base')

@section('content')

    @foreach ($posts as $post)

        <div class="blog container mx-auto my-12">
            <div class="flex blog-post">
                <div class="w-3/5 mx-auto">
                    <a href="{{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}">
                        <h1 class="text-3xl font-semibold mb-4">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <p class="flex items-center">Escrito por <img src="{{ asset('images/jaimesares.jpg') }}" alt="" class="w-8 rounded-full mx-2"> Jaime Sares el {{ $post->published_at->format('d/m/Y') }}</p>

                    <div class="blog-post-content mt-12">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection
