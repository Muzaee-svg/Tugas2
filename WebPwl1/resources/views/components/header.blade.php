@if(!request()->is('blog'))
<div class="bg-[#1A1917] border-b-4 border-[#C94F1E]">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <p class="text-[10px] tracking-[3px] uppercase text-[#C94F1E] font-semibold mb-2">
            Web Blog
        </p>
        <h1 class="font-serif-display text-3xl font-bold text-[#F5F3EE] tracking-tight">
            {{ $slot }}
        </h1>
    </div>
</div>
@endif
