<x-layout :judul="$title">
    <x-slot:judul>{{ $title }}</x-slot:judul>

    {{-- ── HERO SECTION ── --}}
    <section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center border-b border-[#D6D3CC]">

        {{-- Kiri: Teks utama --}}
        <div>
            <p class="text-[10px] tracking-[3px] uppercase text-[#C94F1E] font-bold border-t-2 border-[#C94F1E] inline-block pt-2 mb-6">
                Blog Pemrograman Web
            </p>
            <h2 class="font-serif-display text-5xl font-black leading-[1.1] text-[#1A1917] mb-6">
                Tempat para<br>developer<br>belajar &amp; berbagi.
            </h2>
            <p class="text-[#5C5A56] text-base leading-relaxed max-w-sm mb-8">
                Artikel mendalam tentang Laravel, PHP modern, Tailwind CSS,
                dan ekosistem web development Indonesia.
            </p>
            <div class="flex items-center gap-0">
                <a href="/blog"
                   class="bg-[#1A1917] text-[#F5F3EE] px-7 py-3 text-sm font-semibold tracking-wider uppercase hover:bg-[#C94F1E] transition-colors duration-200">
                    Baca Artikel &rarr;
                </a>
                <a href="/about"
                   class="border border-[#D6D3CC] text-[#5C5A56] px-7 py-3 text-sm font-semibold tracking-wider uppercase hover:border-[#1A1917] hover:text-[#1A1917] transition-colors duration-200">
                    Tentang Saya
                </a>
            </div>
        </div>

        {{-- Kanan: Stats + topik --}}
        <div class="space-y-0 border border-[#D6D3CC]">
            {{-- Stats bar --}}
            <div class="grid grid-cols-3 border-b border-[#D6D3CC]">
                @foreach([
                    ['num' => '12+', 'label' => 'Artikel'],
                    ['num' => '4',   'label' => 'Kategori'],
                    ['num' => '2025','label' => 'Tahun'],
                ] as $stat)
                <div class="py-6 px-4 text-center border-r border-[#D6D3CC] last:border-r-0">
                    <p class="font-serif-display text-3xl font-bold text-[#1A1917]">{{ $stat['num'] }}</p>
                    <p class="text-[11px] tracking-widest uppercase text-[#9A9890] mt-1">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>

            {{-- Topik --}}
            @foreach([
                ['cat' => 'Laravel', 'desc' => 'Framework PHP paling populer untuk web modern'],
                ['cat' => 'Tailwind CSS', 'desc' => 'Utility-first CSS yang mengubah cara kerja styling'],
                ['cat' => 'JavaScript', 'desc' => 'Ekosistem frontend — dari vanilla hingga Alpine.js'],
                ['cat' => 'DevOps', 'desc' => 'Deploy, server, CI/CD untuk developer indie'],
            ] as $topik)
            <div class="flex items-center gap-4 px-5 py-4 border-b border-[#D6D3CC] last:border-b-0 hover:bg-[#1A1917]/[.03] transition-colors cursor-default">
                <span class="w-1.5 h-1.5 rounded-full bg-[#C94F1E] flex-shrink-0"></span>
                <div>
                    <p class="text-sm font-semibold text-[#1A1917]">{{ $topik['cat'] }}</p>
                    <p class="text-xs text-[#9A9890] mt-0.5">{{ $topik['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </section>

    {{-- ── TERBARU ── --}}
    <section class="max-w-7xl mx-auto px-6 py-10">
        <div class="flex items-center gap-4 mb-8">
            <p class="text-[10px] font-bold tracking-[3px] uppercase text-[#C94F1E] border-t-2 border-[#C94F1E] pt-2">
                Terbaru di Blog
            </p>
            <div class="flex-1 border-t border-[#D6D3CC]"></div>
            <a href="/blog" class="text-[11px] tracking-widest uppercase text-[#9A9890] hover:text-[#1A1917] transition-colors">
                Semua &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-[#D6D3CC]">
            @foreach([
                ['cat' => 'Laravel',     'title' => 'Mengenal Blade Engine di Laravel 13',            'date' => '10 Mei 2025', 'read' => '8 mnt'],
                ['cat' => 'PHP',         'title' => 'Membangun REST API dengan Laravel Sanctum',       'date' => '12 Mei 2025', 'read' => '6 mnt'],
                ['cat' => 'Tailwind CSS','title' => 'Tailwind CSS v4: Semua yang Perlu Kamu Tahu',    'date' => '14 Mei 2025', 'read' => '5 mnt'],
            ] as $post)
            <div class="p-6 border-r border-[#D6D3CC] last:border-r-0">
                <p class="text-[9px] font-bold tracking-[2.5px] uppercase text-[#1A1917] border-b border-[#1A1917] inline-block pb-1 mb-4">
                    {{ $post['cat'] }}
                </p>
                <h3 class="font-serif-display text-lg font-bold leading-snug text-[#1A1917] mb-3">
                    {{ $post['title'] }}
                </h3>
                <p class="text-[11px] text-[#9A9890] tracking-wide">
                    {{ $post['date'] }} &middot; {{ $post['read'] }} baca
                </p>
            </div>
            @endforeach
        </div>
    </section>

</x-layout>
