@extends('admin.layouts.base')

@section('content')

    <div class="flex flex-row justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold">Blog</h1>
        <x-link href="{{ route('admin.blog.index') }}"><i class="fas fa-chevron-left fa-fw mr-2"></i> Back</x-link>
    </div>

    <x-admin.card class="w-full">

        <x-forms.input name="title">Title</x-forms.input>

        <x-forms.input name="published_at" type="datetime-local">Published at</x-forms.input>



    </x-admin.card>

@endsection
