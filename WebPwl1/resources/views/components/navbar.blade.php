<header>
    {{-- Top Identity Bar --}}
    <div class="bg-[#F5F3EE] border-b-2 border-[#1A1917]">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

            {{-- Site Name --}}
            <a href="/home" class="font-serif-display text-2xl font-bold tracking-tight text-[#1A1917] no-underline">
                Web<span class="text-[#C94F1E]">Blog</span>Simple
            </a>

            {{-- Nav Links --}}
            <nav class="flex items-stretch border-l border-[#D6D3CC]">
                <x-nav-link href="/home"  :active="request()->is('home', '/')">Home</x-nav-link>
                <x-nav-link href="/blog"  :active="request()->is('blog')">Blog</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            </nav>
        </div>
    </div>

    {{-- Issue Bar --}}
    <div class="bg-[#1A1917] text-[#F5F3EE] py-1.5 px-6">
        <div class="max-w-7xl mx-auto flex items-center gap-6 text-[11px] tracking-[2px] uppercase">
            <span class="font-semibold text-[#C94F1E]">Vol.1 &nbsp;&middot;&nbsp; 2026</span>
            <span class="text-[#555]">&mdash;</span>
            <span class="text-[#888]">Teknologi &nbsp;&middot;&nbsp; PHP &nbsp;&middot;&nbsp; Laravel &nbsp;&middot;&nbsp; Web Blog</span>
        </div>
    </div>
</header>
