@extends('layouts.master')

@section('konten_utama')
<div class="max-w-7xl mx-auto px-8 py-8">
    
    <!-- Tombol Kembali -->
    <a href="{{ route('katalog') }}" class="inline-flex items-center text-sm font-semibold text-gray-800 hover:text-blue-600 mb-8 transition">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Kembali ke katalog
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        
        <!-- Kiri: Gambar Produk -->
        <div class="lg:col-span-1">
            <div class="bg-gray-50 rounded-xl p-4 border border-gray-200 flex items-center justify-center">
                <!-- Ganti src dengan path gambarmu -->
                <img src="{{ 'images/2.png' }}" alt="VGA" class="w-full h-auto object-contain mix-blend-multiply">
            </div>
            <!-- Thumbnail kecil di bawah (opsional, dummy statis) -->
            <div class="flex gap-2 mt-4">
                <div class="w-16 h-16 bg-gray-50 border border-blue-500 rounded p-1 cursor-pointer"><img src="{{ 'images/2.png' }}" class="w-full h-full object-cover mix-blend-multiply"></div>
                <div class="w-16 h-16 bg-gray-50 border border-gray-200 rounded p-1 cursor-pointer"><img src="{{ 'images/2a.png' }}" class="w-full h-full object-cover mix-blend-multiply"></div>
            </div>
        </div>

        <!-- Tengah: Detail & Deskripsi -->
        <div class="lg:col-span-1">
            <h1 class="text-xl font-bold text-gray-900 leading-snug uppercase mb-2">
                GIGABYTE VGA NVIDIA GEFORCE RTX 5060 TI EAGLE ICE 16GB GDDR7 OC WHITE - 16GB GDDR7 OC
            </h1>
            <div class="flex items-center text-sm text-gray-500 mb-4 gap-2">
                <span>Terjual 1</span>
                <span>•</span>
                <span class="text-yellow-400">★</span>
                <span>5 (1 Ulasan)</span>
            </div>
            <p class="text-3xl font-bold text-gray-900 mb-6">Rp12.430.000</p>

            <div class="mb-8">
                <p class="text-sm font-semibold mb-2">Varian :</p>
                <span class="inline-block border-2 border-blue-600 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">
                    16GB GDDR7 OC
                </span>
            </div>

            <!-- Tabs Detail & Spesifikasi -->
            <div class="border-b border-gray-200 mb-4 flex gap-6">
                <button class="text-sm font-bold text-gray-900 border-b-2 border-gray-900 pb-2">Detail Produk</button>
                <button class="text-sm font-semibold text-gray-500 pb-2 hover:text-gray-900">Spesifikasi</button>
            </div>
            <div class="text-sm text-gray-700 leading-relaxed">
                <p class="font-semibold mb-1">Info Produk :</p>
                <ul class="list-none space-y-1">
                    <li><span class="text-gray-500">Merk :</span> NVIDIA</li>
                    <li><span class="text-gray-500">Tipe garansi :</span> Garansi Distributor</li>
                    <li><span class="text-gray-500">Cara klaim :</span> Hubungi penjual</li>
                </ul>
            </div>
        </div>

        <!-- Kanan: Aksi (Atur Jumlah & Keranjang) -->
        <div class="lg:col-span-1">
            <div class="border border-gray-200 rounded-xl p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Atur jumlah dan catatan</h3>
                
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ 'images/2.png' }}" class="w-12 h-12 object-contain bg-gray-50 rounded border border-gray-200">
                    <span class="text-xs text-gray-600">16GB GDDR7 OC</span>
                </div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center border border-gray-300 rounded-md">
                        <button class="px-3 py-1 text-gray-500 hover:bg-gray-100">−</button>
                        <input type="text" value="1" class="w-10 text-center text-sm font-semibold focus:outline-none" readonly>
                        <button class="px-3 py-1 text-blue-600 hover:bg-blue-50 font-bold">+</button>
                    </div>
                    <span class="text-xs font-medium text-orange-500">Stok : Sisa 1</span>
                </div>

                <div class="flex justify-between items-center mb-6">
                    <span class="text-sm text-gray-600">Subtotal</span>
                    <span class="text-lg font-bold text-gray-900">Rp12.430.000</span>
                </div>

                <div class="space-y-3">
                    <button class="w-full bg-[#3b82f6] hover:bg-blue-600 text-white font-semibold py-2.5 rounded-lg text-sm transition">
                        + Keranjang
                    </button>
                    <a href="{{ route('checkout') }}" class="block text-center w-full bg-white border border-[#3b82f6] text-[#3b82f6] hover:bg-blue-50 font-semibold py-2.5 rounded-lg text-sm transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection