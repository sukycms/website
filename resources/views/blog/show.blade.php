@extends('layouts.base')

@section('content')

    <div class="container mx-auto my-12">
        <h1 class="text-3xl font-semibold">
            {{ $post->title }}
        </h1>

        {!! $post->content !!}
    </div>

@endsection
