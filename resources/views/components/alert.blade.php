<div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md my-4" role="alert">
    <div class="flex">
        <div class="py-1 pr-4">{!! $icon ?? '<i class="fas fa-info-circle fa-fw"></i>' !!}</div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
