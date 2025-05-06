@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold text-green-600">Pengelolaan Minuman</h2>
            <p class="text-lg text-green-500">Kelola daftar minuman dan stok minuman</p>
        </div>

        <div class="bg-white shadow-lg p-6 rounded-md">
            <h3 class="text-xl font-semibold text-green-600 mb-4">Daftar Minuman yang Tersedia</h3>
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
