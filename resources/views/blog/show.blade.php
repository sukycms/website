@extends('layouts.base')

@section('meta')
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ strip_tags(Str::limit($post->content, 200)) }}" />
    <meta property="og:url" content="{{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}" />

    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ strip_tags(Str::limit($post->content, 200)) }}">
@endsection

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

                <div class="blog-post-social text-center mt-12">
                    <h6 class="font-semibold italic mb-6">¡Comparte!</h6>
                    <div class="flex items-center justify-center">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}" target="_blank" class="px-4 py-2 rounded text-white mx-2" style="background-color: #4267B2;"><i class="fab fa-facebook-f fa-fw"></i></a>
                        <a href="whatsapp://send?text={{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}" target="_blank" class="px-4 py-2 rounded text-white mx-2" style="background-color: #25d366;"><i class="fab fa-whatsapp fa-fw"></i></a>
                        <a href="https://twitter.com/intent/tweet?text={{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}" target="_blank" class="px-4 py-2 rounded text-white mx-2" style="background-color: #55acee;"><i class="fab fa-twitter fa-fw"></i></a>
                        <a href="mailto:?body={{ route('blog.show', ['id' => $post->id, 'slug' => $post->getSlug()]) }}" target="_blank" class="px-4 py-2 rounded text-white mx-2" style="background-color: #7d7d7d;"><i class="fas fa-envelope fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
