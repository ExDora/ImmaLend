<?php

namespace Database\Seeders;

use App\Enums\LendingStatus;
use App\Models\Item;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Database\Seeder;

class LendingSeeder extends Seeder
{
    /**
     * Contoh transaksi di setiap status supaya semua tab di desain bisa langsung dites:
     * Pending, Upcoming, Currently Borrowing, Overdue, Return Confirmation, History.
     * Hanya dijalankan di environment "local" (lihat DatabaseSeeder).
     */
    public function run(): void
    {
        if (Lending::query()->exists()) {
            return; // hindari data ganda saat db:seed dijalankan ulang
        }

        $admin = User::where('email', 'admin@ski.sch.id')->first();
        $users = User::with('profile')->pluck('id', 'email');
        $items = Item::pluck('id', 'code');

        $rows = [
            // email, kode item, qty, mulai (jam dari sekarang), selesai, status, [kolom tambahan]
            ['andreas.001@ski.sch.id', 'TEK-006', 1, '+1 day',  '+1 day +2 hours', LendingStatus::Pending],
            ['brianna.002@ski.sch.id', 'TEK-008', 1, '+1 day',  '+1 day +3 hours', LendingStatus::Pending],

            ['andreas.001@ski.sch.id', 'TEK-001', 2, '+2 days', '+2 days +5 hours', LendingStatus::Approved],
            ['hanna.001@ski.sch.id',   'MUS-005', 1, '+3 days', '+3 days +5 hours', LendingStatus::Approved],

            ['andreas.001@ski.sch.id', 'TEK-009', 1, '-2 hours', '+3 hours', LendingStatus::Approved],
            ['christopher.003@ski.sch.id', 'TEK-007', 1, '-1 hour', '+4 hours', LendingStatus::Approved],
            ['ezra.001@ski.sch.id',    'MUS-001', 1, '-1 hour', '+4 hours', LendingStatus::Approved],

            ['devina.001@ski.sch.id',  'TEK-010', 1, '-2 days', '-2 days +5 hours', LendingStatus::Approved], // overdue

            ['gabriel.001@ski.sch.id', 'TEK-004', 1, '-6 hours', '-1 hour', LendingStatus::ReturnRequested, ['returned_at' => now()->subMinutes(20)]],
            ['hanna.001@ski.sch.id',   'MUS-003', 2, '-5 hours', '-30 minutes', LendingStatus::ReturnRequested, ['returned_at' => now()->subMinutes(10)]],

            ['brianna.002@ski.sch.id', 'TEK-005', 1, '-5 days', '-5 days +5 hours', LendingStatus::Completed,
                ['returned_at' => now()->subDays(5)->addHours(4), 'return_confirmed_at' => now()->subDays(5)->addHours(4)]],
            ['felicia.001@ski.sch.id', 'RM-001', 1, '-4 days', '-4 days +2 hours', LendingStatus::Completed,
                ['returned_at' => now()->subDays(4)->addHours(2), 'return_confirmed_at' => now()->subDays(4)->addHours(2)]],
            ['andreas.001@ski.sch.id', 'TEK-006', 1, '-3 days', '-3 days +3 hours', LendingStatus::Completed,
                ['returned_at' => now()->subDays(3)->addHours(5), 'return_confirmed_at' => now()->subDays(3)->addHours(5)]], // telat

            ['ezra.001@ski.sch.id',    'RM-004', 1, '-1 day',  '-1 day +2 hours', LendingStatus::Rejected, ['rejection_reason' => 'Studio sudah dipakai kegiatan sekolah.']],
            ['christopher.003@ski.sch.id', 'MUS-005', 1, '-1 day', '-1 day +2 hours', LendingStatus::Cancelled, ['cancelled_at' => now()->subDay()]],
        ];

        foreach ($rows as $row) {
            [$email, $code, $qty, $start, $end, $status] = $row;
            $extra = $row[6] ?? [];

            $startAt = now()->modify($start);
            // "+1 day +2 hours" dsb. dihitung relatif terhadap "now", bukan terhadap start
            $endAt = now()->modify($end);

            $decided = in_array($status, [
                LendingStatus::Approved, LendingStatus::Rejected,
                LendingStatus::ReturnRequested, LendingStatus::Completed,
            ], true);

            Lending::create([
                'user_id' => $users[$email],
                'item_id' => $items[$code],
                'school_class_id' => User::find($users[$email])->profile?->school_class_id,
                'quantity' => $qty,
                'start_at' => $startAt,
                'end_at' => $endAt,
                'reason' => 'Untuk kegiatan belajar / lomba sekolah.',
                'status' => $status,
                'decided_by' => $decided ? $admin?->id : null,
                'decided_at' => $decided ? now() : null,
                'return_confirmed_by' => isset($extra['return_confirmed_at']) ? $admin?->id : null,
            ] + $extra);
        }
    }
}
