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

        // Tanggal relatif: $at(1, '15:00') = besok jam 15:00, $at(-1, ...) = kemarin
        $at = fn(int $days, string $time) => now()->addDays($days)->setTimeFromTimeString($time);

        // [email, item code, borrow, return, reason, status]
        $lendings = [
            ['andreas.001@ski.sch.id', 'TEK-006', $at(1, '15:00'), $at(1, '17:00'), 'Presentasi kelas', 'pending'],
            ['brianna.002@ski.sch.id', 'TEK-008', $at(1, '10:00'), $at(1, '13:00'), 'Kegiatan OSIS', 'pending'],
            ['ezra.001@ski.sch.id', 'RM-002', $at(2, '09:55'), $at(2, '11:15'), 'Rapat kelompok', 'pending'],
            ['felicia.001@ski.sch.id', 'RM-004', $at(1, '10:00'), $at(1, '12:00'), 'Pengambilan video pembelajaran', 'approved'],   // Upcoming
            ['devina.001@ski.sch.id', 'TEK-002', $at(-1, '07:00'), $at(1, '15:00'), 'Ujian praktik', 'approved'],                    // Borrowed
            ['ezra.001@ski.sch.id', 'TEK-010', $at(-3, '07:00'), $at(-3, '15:00'), 'Dokumentasi acara', 'approved'],                // Overdue
            ['christopher.003@ski.sch.id', 'TEK-005', $at(-1, '09:00'), $at(0, '10:30'), 'Mengerjakan tugas', 'return_requested'],
            ['andreas.001@ski.sch.id', 'MUS-003', $at(-7, '07:00'), $at(-7, '13:55'), 'Latihan paduan suara', 'returned'],
            ['brianna.002@ski.sch.id', 'MUS-007', $at(-8, '07:00'), $at(-8, '13:55'), 'Acara sekolah', 'rejected'],
            ['devina.001@ski.sch.id', 'TEK-009', $at(2, '07:00'), $at(2, '13:00'), 'Praktik fotografi', 'cancelled'],
        ];

        foreach ($lendings as [$email, $code, $borrowAt, $returnAt, $reason, $status]) {
            Lending::create([
                'user_id' => $users[$email],
                'item_id' => $items[$code],
                'amount' => 1,
                'borrow_at' => $borrowAt,
                'return_at' => $returnAt,
                'return_requested_at' => $status === 'return_requested' ? now() : null,
                'returned_at' => $status === 'returned' ? $returnAt : null,
                'reason' => $reason,
                'status' => $status,
                'processed_by' => in_array($status, ['pending', 'cancelled']) ? null : $adminId,
            ]);
        }
    }
}