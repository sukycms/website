@extends('admin.layouts.base')

@section('content')

    <form action="{{ route('admin.blog.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-row justify-between items-center mb-8">
            <h1 class="text-3xl font-semibold">Blog</h1>
            <x-forms.submit-button><i class="fas fa-save fa-fw mr-2"></i> Update</x-forms.submit-button>
        </div>

        <x-admin.card class="w-full">

            <x-forms.input name="title" value="{{ $post->title }}">Title</x-forms.input>

            <x-forms.input name="published_at" type="datetime-local" value="{{ $post->published_at->format('Y-m-d\TH:i:s') }}">Published at</x-forms.input>

            <x-forms.textarea name="content" class="tinymce">{!! $post->content !!}</x-forms.textarea>

        </x-admin.card>

    </form>

@endsection
