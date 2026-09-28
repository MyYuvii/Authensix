@extends('layouts.master')

@section('konten_utama')
    <!-- Hero Banner -->
    <div class="px-8 mt-6 max-w-7xl mx-auto">
        <div class="relative w-full h-[350px] bg-gray-900 rounded-2xl overflow-hidden group">
            <img src="{{ asset('images/katalog1.png') }}" alt="PC Build" class="block w-full h-full object-cover opacity-80">
            <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 backdrop-blur-sm p-2 rounded-full transition">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 backdrop-blur-sm p-2 rounded-full transition">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Kategori Navigasi (Tabs) -->
    <div class="px-8 mt-10 max-w-7xl mx-auto">
        <ul class="flex gap-8 overflow-x-auto text-base font-semibold text-gray-600 border-b border-gray-200 pb-2">
            <li class="text-gray-900 border-b-2 border-gray-900 pb-2 cursor-pointer whitespace-nowrap">Flash Sale</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Motherboard</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Storage</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">RAM</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">PSU</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Monitor</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Keyboard</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Laptop</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Printer</li>
            <li class="cursor-pointer hover:text-gray-900 whitespace-nowrap pb-2">Processor</li>
        </ul>
    </div>

    <!-- Product Grid -->
    <div class="px-8 mt-8 mb-16 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
            <!-- Card 1: VGA RTX (Contoh Produk Utama) -->
            <a href="{{ route('detail') }}" class="flex h-full flex-col group cursor-pointer">
                <div class="aspect-[4/3] bg-gray-50 rounded-xl overflow-hidden mb-3 border border-gray-100 group-hover:shadow-md transition">
                    <img src="{{ 'images/2.png' }}" alt="VGA" class="w-full h-full object-contain p-2 mix-blend-multiply">
                </div>
                <h3 class="min-h-[2.5rem] text-sm text-gray-800 line-clamp-2 leading-tight">GIGABYTE VGA NVIDIA RTX 5060 TI...</h3>
                <p class="font-bold text-base mt-2">Rp. 12.430.000</p>
                <div class="flex items-center text-xs text-gray-500 mt-1.5 gap-1">
                    <span class="text-yellow-400 text-sm">★</span>
                    <span class="font-medium text-gray-700">5.0</span>
                    <span class="px-2 border-l border-gray-300">1 Terjual</span>
                </div>
                <span class="text-[11px] text-gray-400 mt-0.5">(1 Ulasan)</span>
            </a>

            <!-- Card 2: Casing -->
            <a href="{{ route('detail') }}" class="flex h-full flex-col group cursor-pointer">
                <div class="aspect-[4/3] bg-gray-50 rounded-xl overflow-hidden mb-3 border border-gray-100 group-hover:shadow-md transition">
                    <img src="{{ 'images/3.png' }}" alt="Casing" class="w-full h-full object-contain p-2 mix-blend-multiply">
                </div>
                <h3 class="min-h-[2.5rem] text-sm text-gray-800 line-clamp-2 leading-tight">Casing gaming PC infinity...</h3>
                <p class="font-bold text-base mt-2">Rp. 650.000</p>
                <div class="flex items-center text-xs text-gray-500 mt-1.5 gap-1">
                    <span class="text-yellow-400 text-sm">★</span>
                    <span class="font-medium text-gray-700">5.0</span>
                    <span class="px-2 border-l border-gray-300">3 Terjual</span>
                </div>
                <span class="text-[11px] text-gray-400 mt-0.5">(1 Ulasan)</span>
            </a>

            <!-- Card 3: Monitor -->
            <a href="{{ route('detail') }}" class="flex h-full flex-col group cursor-pointer">
                <div class="aspect-[4/3] bg-gray-50 rounded-xl overflow-hidden mb-3 border border-gray-100 group-hover:shadow-md transition">
                    <img src="{{ 'images/4.png' }}" alt="Monitor" class="w-full h-full object-contain p-2 mix-blend-multiply">
                </div>
                <h3 class="min-h-[2.5rem] text-sm text-gray-800 line-clamp-2 leading-tight">Monitor PC 24inch Multi...</h3>
                <p class="font-bold text-base mt-2">Rp. 1.500.000</p>
                <div class="flex items-center text-xs text-gray-500 mt-1.5 gap-1">
                    <span class="text-yellow-400 text-sm">★</span>
                    <span class="font-medium text-gray-700">4.3</span>
                    <span class="px-2 border-l border-gray-300">9 Terjual</span>
                </div>
                <span class="text-[11px] text-gray-400 mt-0.5">(4 Ulasan)</span>
            </a>

            <!-- Card 4: Laptop -->
            <a href="{{ route('detail') }}" class="flex h-full flex-col group cursor-pointer">
                <div class="aspect-[4/3] bg-gray-50 rounded-xl overflow-hidden mb-3 border border-gray-100 group-hover:shadow-md transition">
                    <img src="{{ 'images/5.png' }}" alt="Laptop" class="w-full h-full object-contain p-2 mix-blend-multiply">
                </div>
                <h3 class="min-h-[2.5rem] text-sm text-gray-800 line-clamp-2 leading-tight">Laptop lenovo LOQ 12...</h3>
                <p class="font-bold text-base mt-2">Rp. 15.000.000</p>
                <div class="flex items-center text-xs text-gray-500 mt-1.5 gap-1">
                    <span class="text-yellow-400 text-sm">★</span>
                    <span class="font-medium text-gray-700">4.6</span>
                    <span class="px-2 border-l border-gray-300">62 Terjual</span>
                </div>
                <span class="text-[11px] text-gray-400 mt-0.5">(20 Ulasan)</span>
            </a>

        </div>
    </div>
@endsection