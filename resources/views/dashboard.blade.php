<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Wisata</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-green-900 p-4 flex justify-between items-center">
        <div class="text-white">
            <input type="text" placeholder="Pantai Parangtritis, Semarang, Danau Toba" class="px-4 py-2 rounded-md">
        </div>
        <div class="text-white">
            <i class="fas fa-bell"></i>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Wilayah Wisata -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-2">Wilayah Wisata</h2>
            <div class="inline-block bg-green-200 text-green-900 px-4 py-2 rounded-md">
                Semarang
            </div>
        </div>

        <!-- Rekomendasi Pariwisata -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-2">Rekomendasi Pariwisata</h2>
            <div class="grid grid-cols-3 gap-4">
                @foreach($tempatWisatas as $tempatWisata)
                    <x-card 
                        name="{{ $tempatWisata->name }}" 
                        rating="{{ $tempatWisata->rating }}" 
                        category="{{ $tempatWisata->category }}" 
                        address="{{ $tempatWisata->address }}" 
                        image="https://via.placeholder.com/150"
                    />
                @endforeach
            </div>
        </div>

        <!-- Pilihan Pariwisata -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-2">Pilihan Pariwisata</h2>
            <div class="flex space-x-2">
                <button class="bg-green-200 text-green-900 px-4 py-2 rounded-md">Sejarah</button>
                <button class="bg-green-200 text-green-900 px-4 py-2 rounded-md">Kuliner</button>
                <button class="bg-green-200 text-green-900 px-4 py-2 rounded-md">Alam</button>
                <button class="bg-green-200 text-green-900 px-4 py-2 rounded-md">Edukasi</button>
            </div>
        </div>

        <!-- Berita Pariwisata -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-2">Berita Pariwisata</h2>
            <div class="grid grid-cols-3 gap-4">
                <x-card 
                    name="Berita 1" 
                    rating="4.0" 
                    category="Berita" 
                    address="Lokasi Berita 1" 
                    image="images/logo_2.png"
                />
                <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
            </div>
        </div>
    </div>

</body>
</html>
