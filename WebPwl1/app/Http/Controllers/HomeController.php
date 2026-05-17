<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home Page',
        ]);
    }

public function blog()
{
    $posts = [
        [
            'judul'      => 'Mengenal Blade Engine di Laravel 13: Component, Layout & Named Slot',
            'tanggal'    => '10 Mei 2025',
            'waktu_baca' => '8 menit baca',
            'ringkasan'  => 'Blade Engine adalah template engine bawaan Laravel yang sangat powerful. Di artikel ini kita bahas cara membuat Class Component, View Component, Layout, hingga Named Slot dari nol.',
            'kategori'   => 'Laravel',
        ],
        [
            'judul'      => 'Membangun REST API dengan Laravel Sanctum',
            'tanggal'    => '12 Mei 2025',
            'waktu_baca' => '6 menit baca',
            'ringkasan'  => 'Sanctum menyediakan cara sederhana untuk autentikasi SPA dan mobile app. Pelajari setup token-based auth tanpa overhead Passport.',
            'kategori'   => 'PHP',
        ],
        [
            'judul'      => 'Tailwind CSS v4: Semua yang Perlu Kamu Tahu',
            'tanggal'    => '14 Mei 2025',
            'waktu_baca' => '5 menit baca',
            'ringkasan'  => 'Versi terbaru Tailwind membawa perubahan besar: engine berbasis Rust, konfigurasi via CSS, dan tidak ada lagi tailwind.config.js.',
            'kategori'   => 'CSS',
        ],
        [
            'judul'      => 'Optimasi Query Eloquent: Atasi N+1 Problem',
            'tanggal'    => '15 Mei 2025',
            'waktu_baca' => '7 menit baca',
            'ringkasan'  => 'N+1 adalah masalah performa paling umum di Laravel. Dengan eager loading dan query scopes, aplikasimu bisa jauh lebih cepat.',
            'kategori'   => 'Database',
        ],
        [
            'judul'      => 'Alpine.js + Laravel: Interaktivitas Tanpa Build Step',
            'tanggal'    => '16 Mei 2025',
            'waktu_baca' => '5 menit baca',
            'ringkasan'  => 'Alpine.js adalah pilihan sempurna untuk menambah interaktivitas ringan di atas Blade template tanpa Vue atau React.',
            'kategori'   => 'JavaScript',
        ],
        [
            'judul'      => 'Deploy Laravel ke VPS Ubuntu: Panduan Lengkap',
            'tanggal'    => '17 Mei 2025',
            'waktu_baca' => '12 menit baca',
            'ringkasan'  => 'Dari zero ke production: konfigurasi Nginx, PHP-FPM, MySQL, environment variables, dan SSL gratis dengan Certbot.',
            'kategori'   => 'DevOps',
        ],
    ];

    return view('blog.blog', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
}

    public function about()
    {
        return view('about', [
            'title'       => 'Tentang Saya',
            'nama'        => 'Muhammad Zaenal Arifin SyamsuDluha',
            'nim'         => '24104410020',
            'prodi'       => 'Teknik Informatika (4-A)',
            'matakuliah'  => 'Pemrograman Web Lanjut',
            'framework'   => 'Laravel 13 + Tailwind CSS',
        ]);
    }
}
