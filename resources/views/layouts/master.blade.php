<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuthenSIX Computer</title>
    <!-- Memanggil Tailwind CSS via CDN untuk kemudahan slicing -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900 font-sans antialiased flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="flex items-center justify-between py-4 px-8 border-b border-gray-200 bg-white">
        <!-- Logo & Kategori -->
        <div class="flex items-center gap-6">
            <a href="{{ route('katalog') }}" class="text-2xl font-bold italic tracking-tighter">
                Authen<span class="text-blue-600">SIX</span> 
                <span class="text-[10px] font-normal not-italic tracking-normal uppercase block -mt-1 text-gray-500">Computer</span>
            </a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-blue-600 transition">
                <span class="font-semibold text-sm">Kategori</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="flex-1 max-w-3xl px-8">
            <div class="relative">
                <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" class="w-full border border-gray-400 rounded-lg py-2 pl-10 pr-4 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600" placeholder="">
            </div>
        </div>

        <!-- Cart Icon -->
        <div>
            <a href="{{ route('checkout') }}" class="text-gray-800 hover:text-blue-600 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </a>
        </div>
    </header>

    <!-- Konten Dinamis -->
    <main class="grow">
        @yield('konten_utama')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200 py-6 mt-12 text-center">
        <p class="text-gray-500 text-sm">&copy; 2026 Hak Cipta Dilindungi SMK Plus Pelita Nusantara - Kelompok AuthenSIX</p>
    </footer>

</body>
</html>