<?php

namespace App\Models;

class Minuman
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'nama' => 'Jus Jeruk', 'kategori' => 'Jus', 'harga' => 15000, 'stok' => 50],
            ['id' => 2, 'nama' => 'Jus Apel', 'kategori' => 'Jus', 'harga' => 16000, 'stok' => 40],
            ['id' => 3, 'nama' => 'Jus Mangga', 'kategori' => 'Jus', 'harga' => 17000, 'stok' => 30],
            ['id' => 4, 'nama' => 'Jus Alpukat', 'kategori' => 'Jus', 'harga' => 18000, 'stok' => 25],
            ['id' => 5, 'nama' => 'Soda Gembira', 'kategori' => 'Minuman Ringan', 'harga' => 12000, 'stok' => 60],
            ['id' => 6, 'nama' => 'Teh Manis', 'kategori' => 'Teh', 'harga' => 5000, 'stok' => 100],
            ['id' => 7, 'nama' => 'Es Kelapa Muda', 'kategori' => 'Minuman Segar', 'harga' => 15000, 'stok' => 35],
            ['id' => 8, 'nama' => 'Es Teh Tawar', 'kategori' => 'Teh', 'harga' => 4000, 'stok' => 80],
            ['id' => 9, 'nama' => 'Air Mineral', 'kategori' => 'Air', 'harga' => 3000, 'stok' => 200],
            ['id' => 10, 'nama' => 'Jus Stroberi', 'kategori' => 'Jus', 'harga' => 19000, 'stok' => 40],
            ['id' => 11, 'nama' => 'Jus Tomat', 'kategori' => 'Jus', 'harga' => 14000, 'stok' => 60],
            ['id' => 12, 'nama' => 'Jus Nanas', 'kategori' => 'Jus', 'harga' => 16000, 'stok' => 50],
            ['id' => 13, 'nama' => 'Kopi Susu', 'kategori' => 'Kopi', 'harga' => 20000, 'stok' => 45],
            ['id' => 14, 'nama' => 'Teh Tarik', 'kategori' => 'Teh', 'harga' => 10000, 'stok' => 55],
            ['id' => 15, 'nama' => 'Milkshake Cokelat', 'kategori' => 'Milkshake', 'harga' => 25000, 'stok' => 30],
            ['id' => 16, 'nama' => 'Milkshake Vanila', 'kategori' => 'Milkshake', 'harga' => 24000, 'stok' => 30],
            ['id' => 17, 'nama' => 'Es Cappuccino', 'kategori' => 'Kopi', 'harga' => 22000, 'stok' => 25],
            ['id' => 18, 'nama' => 'Susu Kedelai', 'kategori' => 'Minuman Sehat', 'harga' => 12000, 'stok' => 50],
            ['id' => 19, 'nama' => 'Kopi Hitam', 'kategori' => 'Kopi', 'harga' => 15000, 'stok' => 60],
            ['id' => 20, 'nama' => 'Es Campur', 'kategori' => 'Minuman Segar', 'harga' => 13000, 'stok' => 40],
        ];
    }
}
