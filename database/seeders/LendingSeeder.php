<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Database\Seeder;

class LendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id', 'email');
        $items = Item::pluck('id', 'code');
        $adminId = $users['admin@ski.sch.id'];

        // [email, item code, borrow, return, reason, status]
        $lendings = [
            ['andreas.001@ski.sch.id', 'TEK-006', '2026-11-17 15:00', '2026-11-17 17:00', 'Presentasi kelas', 'pending'],
            ['brianna.002@ski.sch.id', 'TEK-008', '2026-11-17 10:00', '2026-11-17 13:00', 'Kegiatan OSIS', 'pending'],
            ['christopher.003@ski.sch.id', 'TEK-005', '2026-11-16 09:00', '2026-11-16 10:30', 'Mengerjakan tugas', 'pending'],
            ['ezra.001@ski.sch.id', 'RM-002', '2026-11-16 09:55', '2026-11-16 11:15', 'Rapat kelompok', 'pending'],
            ['felicia.001@ski.sch.id', 'RM-004', '2026-11-16 10:00', '2026-11-16 12:00', 'Pengambilan video pembelajaran', 'approved'],
            ['devina.001@ski.sch.id', 'TEK-002', '2026-11-15 07:00', '2026-11-15 09:35', 'Ujian praktik', 'borrowed'],
            ['andreas.001@ski.sch.id', 'MUS-003', '2026-11-10 07:00', '2026-11-10 13:55', 'Latihan paduan suara', 'returned'],
            ['brianna.002@ski.sch.id', 'MUS-007', '2026-11-09 07:00', '2026-11-09 13:55', 'Acara sekolah', 'rejected'],
        ];

        foreach ($lendings as [$email, $code, $borrowAt, $returnAt, $reason, $status]) {
            Lending::create([
                'user_id' => $users[$email],
                'item_id' => $items[$code],
                'amount' => 1,
                'borrow_at' => $borrowAt,
                'return_at' => $returnAt,
                'returned_at' => $status === 'returned' ? $returnAt : null,
                'reason' => $reason,
                'status' => $status,
                'processed_by' => $status === 'pending' ? null : $adminId,
            ]);
        }
    }
}
