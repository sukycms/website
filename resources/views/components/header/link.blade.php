<li class="px-2"{{ $attributes }}>
    <a href="{{ $url }}">
        {{ $title !== '' ? $title : $slot }}
    </a>
</li>
