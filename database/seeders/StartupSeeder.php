<?php

namespace Database\Seeders;

use App\Models\Startup;
use Illuminate\Database\Seeder;

class StartupSeeder extends Seeder
{
    public function run(): void
    {
        $startups = [
            ['name' => 'Tani Nusantara', 'industry' => 'Agritech', 'founder' => 'Ahmad Fauzi', 'logo' => 'tani-nusantara.png', 'website' => 'https://taninusantara.example', 'description' => 'Platform yang menghubungkan petani lokal langsung dengan pembeli, dilengkapi informasi harga pasar dan panduan budidaya agar hasil panen lebih menguntungkan.'],
            ['name' => 'Bayarin Digital', 'industry' => 'Fintech', 'founder' => 'Siti Rahmawati', 'logo' => 'bayarin-digital.png', 'website' => 'https://bayarindigital.example', 'description' => 'Layanan pembayaran digital untuk UMKM dengan pencatatan transaksi otomatis, QR pembayaran, dan laporan keuangan sederhana.'],
            ['name' => 'Belajarku Pintar', 'industry' => 'Edtech', 'founder' => 'Rizal Hakim', 'logo' => 'belajarku-pintar.png', 'website' => 'https://belajarkupintar.example', 'description' => 'Aplikasi belajar adaptif untuk pelajar SMP dan SMA yang menyesuaikan materi dengan kemampuan masing-masing siswa.'],
            ['name' => 'Sehat Sentosa', 'industry' => 'Healthtech', 'founder' => 'Dr. Maya Kusuma', 'logo' => 'sehat-sentosa.png', 'website' => 'https://sehatsentosa.example', 'description' => 'Layanan konsultasi kesehatan online dan pengingat minum obat yang membantu masyarakat mengakses tenaga medis dengan mudah.'],
            ['name' => 'Logistik Gesit', 'industry' => 'Logistik', 'founder' => 'Bagus Prakoso', 'logo' => 'logistik-gesit.png', 'website' => 'https://logistikgesit.example', 'description' => 'Jasa pengiriman barang antar kota untuk pelaku usaha kecil dengan pelacakan paket real-time dan tarif yang transparan.'],
            ['name' => 'Kopi Karya Digital', 'industry' => 'E-commerce', 'founder' => 'Lestari Wulandari', 'logo' => 'kopi-karya-digital.png', 'website' => 'https://kopikaryadigital.example', 'description' => 'Marketplace khusus kopi dan produk olahan dari petani serta roastery lokal di berbagai daerah Indonesia.'],
            ['name' => 'Wisata Lokal ID', 'industry' => 'Travel', 'founder' => 'Dimas Anggara', 'logo' => 'wisata-lokal-id.png', 'website' => 'https://wisatalokalid.example', 'description' => 'Platform pemesanan paket wisata dan homestay yang mempromosikan destinasi tersembunyi serta pemandu wisata warga setempat.'],
            ['name' => 'Energi Hijau Nusantara', 'industry' => 'Cleantech', 'founder' => 'Nurul Hidayah', 'logo' => 'energi-hijau-nusantara.png', 'website' => 'https://energihijaunusantara.example', 'description' => 'Penyedia solusi panel surya skala rumah tangga dan UMKM, lengkap dengan pemantauan produksi listrik melalui aplikasi.'],
        ];

        foreach ($startups as $startup) {
            Startup::create($startup);
        }
    }
}
