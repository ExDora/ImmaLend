<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    /**
     * Contoh kelas. Sesuaikan dengan data kelas sekolah yang sebenarnya.
     */
    public function run(): void
    {
        foreach (['X', 'XI', 'XII'] as $grade) {
            foreach (['TKJ' => 3, 'RPL' => 2] as $major => $total) {
                for ($i = 1; $i <= $total; $i++) {
                    SchoolClass::firstOrCreate(['name' => "{$grade} {$major} {$i}"]);
                }
            }
        }
    }
}
