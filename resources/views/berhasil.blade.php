@extends('layouts.master')

@section('konten_utama')
<div class="max-w-2xl mx-auto px-4 py-12">
    
    <div class="bg-gray-50 rounded-3xl overflow-hidden shadow-sm border border-gray-100">
        
        <!-- Header Biru & Checkmark -->
        <div class="bg-[#007AFF] py-10 flex justify-center">
            <div class="bg-white rounded-full w-32 h-32 flex flex-col items-center justify-center shadow-lg">
                <svg class="w-12 h-12 text-[#007AFF] mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span class="text-[#007AFF] text-xs font-bold text-center leading-tight">Transaksi<br>Berhasil !</span>
            </div>
        </div>

        <!-- Detail Produk & Harga -->
        <div class="p-8 bg-gray-50">
            <div class="flex items-center gap-4 border-b border-gray-200 pb-6 mb-6">
                <div class="w-20 h-20 bg-white border border-gray-200 rounded-xl shrink-0 flex items-center justify-center p-2">
                    <img src="/vga-rtx.jpg" alt="VGA" class="w-full h-full object-contain mix-blend-multiply">
                </div>
                <div>
                    <h3 class="text-sm font-bold text-gray-900 leading-snug uppercase mb-1">
                        GIGABYTE VGA NVIDIA GEFORCE RTX 5060 TI EAGLE ICE 16GB GDDR7 OC WHITE - 16GB GDDR7 OC
                    </h3>
                    <p class="text-blue-600 font-bold">Rp34.430.000</p>
                </div>
            </div>

            <!-- Rincian Transaksi -->
            <div class="space-y-3 text-sm text-gray-700 mb-8">
                <div class="flex justify-between">
                    <span class="text-gray-500">No. invoice</span>
                    <span class="font-semibold text-gray-900">INV-2425100</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Tanggal</span>
                    <span class="font-semibold text-gray-900">17 Agustus 1945 <span class="mx-1">•</span> 10:34</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Metode Bayar</span>
                    <span class="font-semibold text-gray-900">Transfer Bank BRI</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Status</span>
                    <span class="font-semibold text-green-500 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Lunas
                    </span>
                </div>
            </div>

            <!-- Estimasi Kotak -->
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center mb-4">
                <p class="text-sm font-medium text-gray-800 flex items-center justify-center gap-2 mb-1">
                    <span>📦</span> Estimasi pengiriman: 4-5 hari
                </p>
                <p class="text-xs text-gray-500">No. resi akan dikirim via email</p>
            </div>

            <!-- Thank You Banner -->
            <div class="bg-white border border-gray-200 rounded-xl p-4 text-center mb-8">
                <p class="text-sm font-medium text-gray-800">🎉 Terimakasih telah berbelanja di Authen<span class="text-blue-500">Six</span></p>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ route('katalog') }}" class="block w-full text-center bg-[#007AFF] hover:bg-blue-600 text-white font-semibold py-3 rounded-xl transition">
                ← Kembali ke katalog
            </a>
        </div>

    </div>
</div>
@endsection