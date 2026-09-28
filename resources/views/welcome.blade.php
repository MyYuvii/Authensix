@extends('layouts.master')

@section('konten_utama')
<div class="flex flex-col items-center justify-center min-h-[75vh] text-center px-4">
    
    <!-- Hero Section -->
    <div class="max-w-3xl mt-12">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 tracking-tight">
            Rakit PC Impianmu <br> <span class="text-blue-600 italic">Lebih Mudah & Aman</span>
        </h1>
        <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            AuthenSIX Computer menyediakan berbagai komponen PC, laptop, dan aksesoris original dengan garansi resmi. Siap melayani kebutuhan gaming, editing, hingga produktivitas harianmu.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <!-- Tombol CTA Utama -->
            <a href="{{ route('katalog') }}" class="bg-[#3b82f6] hover:bg-blue-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                Jelajahi Katalog
            </a>
            <!-- Tombol Sekunder (Opsional) -->
            <a href="#fitur" class="bg-white hover:bg-gray-50 text-gray-800 font-semibold py-3 px-8 rounded-full transition border border-gray-200">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>

    <!-- Fitur Singkat (Pemanis Landing Page) -->
    <div id="fitur" class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-24 max-w-5xl mx-auto border-t border-gray-100 pt-16 mb-8">
        <div class="text-center px-4">
            <div class="bg-blue-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                <span class="text-2xl">🛡️</span>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">100% Original</h3>
            <p class="text-sm text-gray-500">Semua produk dijamin asli dan bergaransi resmi dari distributor.</p>
        </div>
        <div class="text-center px-4">
            <div class="bg-blue-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                <span class="text-2xl">⚡</span>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Pengiriman Cepat</h3>
            <p class="text-sm text-gray-500">Dikemas dengan ekstra aman dan siap dikirim di hari yang sama.</p>
        </div>
        <div class="text-center px-4">
            <div class="bg-blue-50 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                <span class="text-2xl">💻</span>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Konsultasi Rakitan</h3>
            <p class="text-sm text-gray-500">Bingung kecocokan part? Kami siap bantu meracik PC sesuai budget.</p>
        </div>
    </div>

</div>
@endsection