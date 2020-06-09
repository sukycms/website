@extends('admin.layouts.base')

@section('content')

    <x-admin.card class="w-full">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($subscribers as $subscriber)
                <tr>
                    <td class="border px-4 py-2">{{ $subscriber->email }}</td>
                    <td class="border px-4 py-2">{{ $subscriber->status }}</td>
                    <td class="border px-4 py-2">{{ $subscriber->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $subscribers->links() !!}
    </x-admin.card>

@endsection
