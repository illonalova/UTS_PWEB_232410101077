@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="max-w-sm mx-auto bg-green-100 p-6 rounded-md shadow-lg mb-8 overflow-hidden">
            <div class="text-center mb-8 p-6">
                <h2 class="text-3xl font-semibold text-green-600">Selamat Datang di Minuman App!</h2>
                <p class="text-lg text-green-500">Nikmati promosi menarik dan temukan minuman favoritmu!</p>
            </div>
        </div>        

        <div class="bg-green-100 p-6 rounded-md shadow-lg mb-8">
            <div class="flex items-center justify-between">
                <div class="flex-1 mr-4">
                    <h3 class="text-2xl font-semibold text-green-600 mb-4">Promosi Minuman Spesial!</h3>
                    <p class="text-lg text-green-700">Dapatkan diskon 20% untuk semua jenis minuman favorit. Buruan, promo hanya berlaku sampai akhir bulan ini!</p>
                    <p class="text-lg text-green-700">Coba juga varian minuman baru yang segar dan menyehatkan. Jangan lewatkan kesempatan ini!</p>
                </div>
                <div class="flex-1">
                    <img src="{{ asset('images/promooo.webp') }}" alt="Promo Minuman" class="object-cover w-1/2 rounded-md ml-70">
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg p-6 rounded-md">
            <h3 class="text-xl font-semibold text-green-600 mb-4">Daftar Minuman Terlaris</h3>
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama Minuman</th>
                        <th class="px-4 py-2 text-left">Kategori</th>
                        <th class="px-4 py-2 text-left">Harga</th>
                        <th class="px-4 py-2 text-left">Stok</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($minuman as $item)
                        <tr>
                            <td class="px-4 py-2">{{ $item['nama'] }}</td>
                            <td class="px-4 py-2">{{ ucfirst($item['kategori']) }}</td>
                            <td class="px-4 py-2">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                            <td class="px-4 py-2">{{ $item['stok'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
