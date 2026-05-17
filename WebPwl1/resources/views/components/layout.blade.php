<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $judul ?? 'WebBlogSimple' }} | WebBlogSimple</title>
    <style>
        body {
            background-color: #F5F3EE;
            font-family: 'Inter', sans-serif;
            color: #1A1917;
        }
        .font-serif-display {
            font-family: 'Playfair Display', serif;
        }
        .font-serif-body {
            font-family: 'Source Serif 4', serif;
        }
    </style>
</head>
<body class="min-h-screen">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Header/Page Title Bar --}}
    <x-header>{{ $judul ?? 'WebBlogSimple' }}</x-header>

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-[#1A1917] text-[#F5F3EE] mt-0">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div>
                    <p class="font-serif-display text-xl font-bold">
                        Web<span class="text-[#C94F1E]">Blog</span>Simple
                    </p>
                    <p class="text-[#9A9890] text-xs mt-1 tracking-widest uppercase">
                        Blog Pemrograman Web &middot; Laravel &middot; PHP &middot; CSS
                    </p>
                </div>
                <div class="flex gap-3">
                    @foreach(['Laravel', 'PHP', 'Tailwind', 'JavaScript'] as $tag)
                    <span class="text-[10px] tracking-widest uppercase px-3 py-1 border border-[#444] text-[#9A9890]">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="border-t border-[#333] mt-6 pt-4 text-[#555] text-xs">
                &copy; {{ date('Y') }} WebBlogSimple — Tugas Pemrograman Web Lanjut
            </div>
        </div>
    </footer>

</body>
</html>
