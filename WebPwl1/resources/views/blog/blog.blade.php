<x-layout :judul="$title">
    <x-slot:judul>{{ $title }}</x-slot:judul>

    {{-- HERO: Artikel Utama (kiri besar) + 2 artikel kanan --}}
    <section class="max-w-7xl mx-auto px-6 pt-6 pb-0">

        {{-- Section label --}}
        <div class="flex items-center gap-4 mb-5">
            <p class="text-[10px] font-bold tracking-[3px] uppercase text-[#C94F1E] border-t-2 border-[#C94F1E] pt-2">
                Edisi Terbaru
            </p>
            <div class="flex-1 border-t border-[#D6D3CC]"></div>
            <p class="text-[11px] text-[#9A9890] tracking-widest uppercase">
                {{ count($posts) }} artikel
            </p>
        </div>

        {{-- Grid hero --}}
        <div class="grid grid-cols-1 md:grid-cols-5 border border-[#D6D3CC] min-h-[320px]">

            {{-- Artikel UTAMA (kiri, 3 kolom) --}}
            @if(count($posts) > 0)
            @php $hero = $posts[0]; @endphp
            <div class="md:col-span-3 p-8 border-r border-[#D6D3CC] flex flex-col justify-between bg-[#F5F3EE]">
                <div>
                    {{-- Kategori --}}
                    <span class="text-[9px] font-bold tracking-[2.5px] uppercase text-[#C94F1E] border-t-2 border-[#C94F1E] pt-1.5 inline-block mb-5">
                        {{ $hero['kategori'] }}
                    </span>
                    {{-- Judul besar --}}
                    <h2 class="font-serif-display text-4xl font-black leading-[1.15] text-[#1A1917] mb-5">
                        {{ $hero['judul'] }}
                    </h2>
                    {{-- Ringkasan --}}
                    <p class="font-serif-body text-[#5C5A56] text-base leading-relaxed mb-6 max-w-lg">
                        {{ $hero['ringkasan'] }}
                    </p>
                </div>
                {{-- Meta info --}}
                <div class="flex items-center gap-3 text-xs text-[#9A9890] border-t border-[#D6D3CC] pt-4">
                    <span class="w-6 border-t border-[#9A9890]"></span>
                    <span>{{ $hero['tanggal'] }}</span>
                    <span>&middot;</span>
                    <span>{{ $hero['waktu_baca'] ?? '8 menit baca' }}</span>
                    <span class="ml-auto text-[#1E6DC9] hover:underline cursor-pointer tracking-wide">
                        Baca selengkapnya &rarr;
                    </span>
                </div>
            </div>
            @endif

            {{-- Artikel SAMPINGAN (kanan, 2 kolom) --}}
            <div class="md:col-span-2 flex flex-col">
                @foreach(array_slice($posts, 1, 2) as $index => $post)
                <div class="flex-1 p-6 {{ $index === 0 ? 'border-b border-[#D6D3CC]' : '' }}">
                    {{-- Nomor edisi --}}
                    <div class="font-serif-display text-5xl font-black text-[#D6D3CC] leading-none mb-2">
                        {{ str_pad($index + 2, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <span class="text-[9px] font-bold tracking-[2px] uppercase text-[#1E6DC9] inline-block mb-3">
                        {{ $post['kategori'] }}
                    </span>
                    <h3 class="font-serif-display text-base font-bold leading-snug text-[#1A1917] mb-3">
                        {{ $post['judul'] }}
                    </h3>
                    <p class="text-xs text-[#9A9890]">{{ $post['tanggal'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- GRID BAWAH: Artikel sisa — layout 3 kolom koran --}}
    @if(count($posts) > 3)
    <section class="max-w-7xl mx-auto px-6 py-6">

        <div class="flex items-center gap-4 mb-5">
            <p class="text-[10px] font-bold tracking-[3px] uppercase text-[#1A1917] border-t-2 border-[#1A1917] pt-2">
                Artikel Lainnya
            </p>
            <div class="flex-1 border-t border-[#D6D3CC]"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 border-t border-l border-[#D6D3CC]">
            @foreach(array_slice($posts, 3) as $post)
            <div class="p-6 border-b border-r border-[#D6D3CC]">
                <span class="text-[9px] font-bold tracking-[2.5px] uppercase text-[#1A1917] border-b border-[#1A1917] inline-block pb-1 mb-4">
                    {{ $post['kategori'] }}
                </span>
                <h3 class="font-serif-display text-[15px] font-bold leading-snug text-[#1A1917] mb-3">
                    {{ $post['judul'] }}
                </h3>
                <p class="text-sm text-[#5C5A56] leading-relaxed mb-4">
                    {{ $post['ringkasan'] }}
                </p>
                <div class="text-[11px] text-[#9A9890] pt-3 border-t border-[#D6D3CC]">
                    {{ $post['tanggal'] }}
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- Jika data kosong --}}
    @if(count($posts) === 0)
    <div class="max-w-7xl mx-auto px-6 py-24 text-center border-t border-[#D6D3CC]">
        <p class="font-serif-display text-6xl text-[#D6D3CC] mb-4">—</p>
        <p class="text-[#9A9890] tracking-widest uppercase text-sm">Belum ada artikel</p>
    </div>
    @endif

</x-layout>
