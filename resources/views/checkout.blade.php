@extends('layouts.master')

@section('konten_utama')
    <div class="px-8 mt-8 mb-16 max-w-7xl mx-auto">
        <h1 class="text-3xl font-semibold text-gray-700 mb-8">Form Checkout</h1>

        <!-- Form dibungkus dari awal sampai akhir layout grid -->
        <form action="{{ route('berhasil') }}" method="GET" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Kiri: Form Section -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Card Data Penerima -->
                <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
                    <h2 class="text-xl font-semibold mb-4">Data Penerima</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm text-gray-600 mb-1">Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="Contoh: Sulaiman" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600 mb-1">Email</label>
                            <input type="email" name="email" placeholder="Sulaiman@gmail.com" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600 mb-1">No. Handphone</label>
                            <input type="tel" name="phone" placeholder="08xxxxxxxxxx" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                        </div>
                    </div>
                </div>

                <!-- Card Alamat Pengiriman -->
                <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
                    <h2 class="text-xl font-semibold mb-4">Alamat Pengiriman</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm text-gray-600 mb-1">Alamat Lengkap</label>
                            <input type="text" name="alamat" placeholder="Cibinong (Lengkap)" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm text-gray-600 mb-1">Kota</label>
                                <input type="text" name="kota" placeholder="Bogor" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                            </div>
                            <div>
                                <label class="block text-sm text-gray-600 mb-1">Kode Pos</label>
                                <input type="text" name="kodepos" placeholder="12345" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Metode Pengiriman -->
                <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
                    <h2 class="text-xl font-semibold mb-4">Metode Pengiriman</h2>
                    <div class="space-y-3">
                        
                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="kurir" value="reguler" class="w-5 h-5 text-blue-600 focus:ring-blue-500">
                                <div>
                                    <p class="font-semibold text-sm">JNE Reguler</p>
                                    <p class="text-xs text-gray-500">Estimasi: 3-5 Hari</p>
                                </div>
                            </div>
                            <span class="font-semibold">Rp. 25.000</span>
                        </label>

                        <label class="flex items-center justify-between p-4 border border-blue-600 bg-blue-50/10 rounded-lg cursor-pointer transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="kurir" value="yes" checked class="w-5 h-5 text-blue-600 focus:ring-blue-500">
                                <div>
                                    <p class="font-semibold text-sm">JNE Yes</p>
                                    <p class="text-xs text-gray-500">Estimasi: 1-2 Hari</p>
                                </div>
                            </div>
                            <span class="font-semibold">Rp. 55.000</span>
                        </label>

                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50 transition">
                            <div class="flex items-center gap-4">
                                <input type="radio" name="kurir" value="oke" class="w-5 h-5 text-blue-600 focus:ring-blue-500">
                                <div>
                                    <p class="font-semibold text-sm">JNE OKE Express</p>
                                    <p class="text-xs text-gray-500">Estimasi: Same Day</p>
                                </div>
                            </div>
                            <span class="font-semibold">Rp. 90.000</span>
                        </label>

                    </div>
                </div>

            </div>

            <!-- Kanan: Ringkasan Pesanan (Sticky) -->
            <div class="lg:col-span-1">
                <div class="border border-gray-200 rounded-xl p-6 sticky top-6 shadow-sm">
                    <div class="flex justify-center mb-6">
                        <img src="{{ 'images/2.png' }}" alt="VGA" class="w-48 object-contain">
                    </div>
                    
                    <h3 class="font-semibold text-sm text-gray-800 leading-snug mb-6 uppercase">
                        GIGABYTE VGA NVIDIA RTX 5060 TI EAGLE ICE 16GB GDDR7 OC WHITE - 16GB GDDR7 OC
                    </h3>

                    <div class="space-y-3 text-sm text-gray-700 border-b border-gray-200 pb-4 mb-4">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span>Rp. 12.430.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Ongkos Kirim</span>
                            <span>Rp. 55.000</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <span class="text-sm font-semibold text-gray-700">Total<br>Bayar</span>
                        <span class="text-xl font-bold text-blue-500">Rp. 12.485.000</span>
                    </div>

                    <!-- Tombol bertipe submit agar memicu tag form -->
                    <button type="submit" class="w-full bg-[#3b82f6] hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition shadow-md hover:shadow-lg">
                        Bayar sekarang
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection