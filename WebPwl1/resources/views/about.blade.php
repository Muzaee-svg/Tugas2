<x-layout :judul="$title">
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-4xl mx-auto px-6 py-12">

        {{-- Grid 2 kolom --}}
        <div class="grid grid-cols-1 md:grid-cols-5 gap-0 border border-[#D6D3CC]">

            {{-- Kiri: Identitas singkat --}}
            <div class="md:col-span-2 bg-[#1A1917] p-8 text-[#F5F3EE] flex flex-col justify-between">
                <div>
                    <p class="text-[9px] tracking-[3px] uppercase text-[#C94F1E] font-bold border-t-2 border-[#C94F1E] pt-2 inline-block mb-6">
                        Penulis
                    </p>
                    <h2 class="font-serif-display text-3xl font-black leading-tight mb-3">{{ $nama }}</h2>
                    <p class="text-[#9A9890] text-sm">{{ $prodi }}</p>
                    <div class="mt-6 border-t border-[#333] pt-6 space-y-2">
                        <p class="text-xs text-[#9A9890] tracking-widest uppercase">NIM</p>
                        <p class="font-mono text-[#F5F3EE] text-sm">{{ $nim }}</p>
                    </div>
                </div>
                <div class="mt-8">
                    <p class="text-[10px] tracking-widest text-[#555] uppercase">
                        Web<span class="text-[#C94F1E]">Blog</span>Simple &middot; 2026
                    </p>
                </div>
            </div>

            {{-- Kanan: Detail --}}
            <div class="md:col-span-3 divide-y divide-[#D6D3CC]">
                <div class="p-6 pb-5">
                    <p class="text-[10px] tracking-[3px] uppercase text-[#C94F1E] font-bold border-t-2 border-[#C94F1E] pt-2 inline-block mb-4">
                        Informasi Akademik
                    </p>
                </div>

                @foreach([
                    ['label' => 'Program Studi', 'value' => $prodi],
                    ['label' => 'Mata Kuliah',   'value' => $matakuliah],
                    ['label' => 'Framework',     'value' => $framework],
                ] as $info)
                <div class="px-6 py-5 flex items-baseline justify-between group hover:bg-[#1A1917]/[.02] transition-colors">
                    <span class="text-[11px] tracking-widest uppercase text-[#9A9890]">{{ $info['label'] }}</span>
                    <span class="font-serif-body text-[#1A1917] text-sm font-semibold text-right max-w-xs">{{ $info['value'] }}</span>
                </div>
                @endforeach

                {{-- Tentang blog --}}
                <div class="p-6 bg-[#F5F3EE]">
                    <p class="font-serif-body text-[#5C5A56] text-sm leading-relaxed">
                        Blog ini dibuat sebagai tugas individu <strong class="text-[#1A1917]">{{ $matakuliah }}</strong>,
                        dibangun dengan <strong class="text-[#1A1917]">{{ $framework }}</strong>.
                        Menerapkan konsep Blade Engine secara penuh: Class Component, View Component,
                        Blade Layout, Named Slot, dan NavLink dengan active state.
                    </p>
                </div>
            </div>

        </div>

    </div>

</x-layout>
