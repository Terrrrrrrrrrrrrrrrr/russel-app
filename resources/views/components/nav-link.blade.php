@props ([
    'active' => false
])

<a class="nav_link {{ $active ? 'active' : '' }}"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
>
        {{ $slot }}
</a>