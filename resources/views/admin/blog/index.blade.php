@extends('admin.layouts.base')

@section('content')

    <div class="flex flex-row justify-between items-center mb-8">
        <h1 class="text-3xl font-semibold">Blog</h1>
        <x-link href="{{ route('admin.blog.create') }}"><i class="fas fa-plus-circle fa-fw mr-2"></i> Post</x-link>
    </div>

    <x-admin.card class="w-full">
        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="text-left px-4 py-3">Title</th>
                <th class="text-left px-4 py-3">Date</th>
                <th class="px-4 py-3"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="px-4 py-3">{{ Str::limit($post->title) }}</td>
                    <td class="px-4 py-3">{{ $post->published_at->format('d/m/Y H:s') }}</td>
                    <td class="px-4 py-3 flex items-center justify-around">
                        <a href="{{ route('admin.blog.edit', $post) }}"><i class="fas fa-edit text-blue-500"></i></a>
                        <a href="{{ route('admin.blog.destroy', $post) }}"><i class="fas fa-trash-alt text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $posts->links() !!}
    </x-admin.card>

@endsection
