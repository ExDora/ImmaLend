<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        $adminId = User::where('email', 'admin@ski.sch.id')->value('id');

        $announcements = [
            ['New Items Available', 'Check out new items that are now available for borrowing.', 'box'],
            ['Inventory Check', 'Inventory will be checked on 28 August 2026.', 'calendar-check'],
            ['Return On Time', 'Please return item on or before the due date to avoid penalties.', 'clock'],
        ];

        foreach ($announcements as [$title, $body, $icon]) {
            Announcement::updateOrCreate(
                ['title' => $title],
                ['body' => $body, 'icon' => $icon, 'published_at' => now(), 'created_by' => $adminId]
            );
        }
    }
}
