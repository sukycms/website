@extends('admin.layouts.base')

@section('content')

    <div class="w-full flex flex-row">

        <x-admin.card class="w-1/4 text-center">
            <p class="text-4xl">{{ $subscribers }}</p>
            <p>Subscribers</p>
        </x-admin.card>

    </div>

@endsection
