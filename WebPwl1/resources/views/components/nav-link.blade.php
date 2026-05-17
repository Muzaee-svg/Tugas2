{{-- NavLink --}}
@props(['active' => false])

<a
    {{ $attributes }}
    class="flex items-center px-5 py-3 text-[11px] font-semibold tracking-[1.5px] uppercase border-l border-[#D6D3CC] transition-colors duration-100 no-underline
        {{ $active
            ? 'bg-[#1A1917] text-[#F5F3EE]'
            : 'text-[#5C5A56] hover:bg-[#1A1917]/5 hover:text-[#1A1917]'
        }}"
>
    {{ $slot }}
</a>
