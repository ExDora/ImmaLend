<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Urutan penting: tabel induk dulu, baru yang bergantung padanya.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            SchoolClassSeeder::class,
            UserSeeder::class,
            ItemSeeder::class,
            AnnouncementSeeder::class,
        ]);

        // Data contoh transaksi hanya untuk pengembangan lokal
        if (app()->environment('local')) {
            $this->call(LendingSeeder::class);
        }
    }
}
