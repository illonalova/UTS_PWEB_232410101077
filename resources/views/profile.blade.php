@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Judul Halaman -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold text-green-600">Profile</h2>
            <p class="text-lg text-green-500">Lihat dan kelola data profil Anda</p>
        </div>

        <!-- Tabel Profil -->
        <div class="bg-white shadow-lg p-6 rounded-md">
            <h3 class="text-xl font-semibold text-green-600 mb-4">Data Profil</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-gray-100 p-4 rounded-md">
                    <h4 class="text-lg font-medium text-green-600">Nama</h4>
                    <p class="text-gray-700">Lova</p> <!-- Ganti dengan data nama -->
                </div>

                <div class="bg-gray-100 p-4 rounded-md">
                    <h4 class="text-lg font-medium text-green-600">Alamat</h4>
                    <p class="text-gray-700">Jl. Raya No. 123, Jaksel</p> <!-- Ganti dengan data alamat -->
                </div>

                <div class="bg-gray-100 p-4 rounded-md">
                    <h4 class="text-lg font-medium text-green-600">Nomor Telepon</h4>
                    <p class="text-gray-700">0812-3456-7890</p> <!-- Ganti dengan data nomor telepon -->
                </div>
            </div>
        </div>
    </div>
@endsection
