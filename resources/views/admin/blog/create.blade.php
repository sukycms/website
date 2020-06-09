@extends('admin.layouts.base')

@section('content')

    <form action="{{ route('admin.blog.store') }}" method="POST">
        @csrf

        <div class="flex flex-row justify-between items-center mb-8">
            <h1 class="text-3xl font-semibold">Blog</h1>
            <x-forms.submit-button href="{{ route('admin.blog.index') }}"><i class="fas fa-save fa-fw mr-2"></i> Publish</x-forms.submit-button>
        </div>

        <x-admin.card class="w-full">

            <x-forms.input name="title">Title</x-forms.input>

            <x-forms.input name="published_at" type="datetime-local">Published at</x-forms.input>

            <x-forms.textarea name="content" class="tinymce"></x-forms.textarea>

        </x-admin.card>

    </form>

@endsection
