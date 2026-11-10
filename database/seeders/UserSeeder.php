<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Enums\UserStatus;
use App\Models\SchoolClass;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Akun contoh dari halaman Users (admin). Password dev: "password".
     * JANGAN dipakai di production.
     */
    public function run(): void
    {
        $users = [
            // name, email, role, kelas, nis
            ['Admin Utama',         'admin@ski.sch.id',            Role::Admin,   null,         null],
            ['Andika Luxius',       'andika.001@ski.sch.id',       Role::Teacher, null,         null],
            ['Felicia Gracia',      'felicia.001@ski.sch.id',      Role::Teacher, null,         null],
            ['Andreas Nathaniel',   'andreas.001@ski.sch.id',      Role::Student, 'XII TKJ 3',  '1001'],
            ['Brianna Rachel',      'brianna.002@ski.sch.id',      Role::Student, 'XII TKJ 3',  '1002'],
            ['Christopher Rafael',  'christopher.003@ski.sch.id',  Role::Student, 'XII TKJ 2',  '1003'],
            ['Devina Valencia',     'devina.001@ski.sch.id',       Role::Student, 'XII RPL 1',  '1004'],
            ['Ezra Zefanya',        'ezra.001@ski.sch.id',         Role::Student, 'XI TKJ 1',   '1005'],
            ['Gabriel Lie',         'gabriel.001@ski.sch.id',      Role::Student, 'XI RPL 1',   '1006'],
            ['Hanna Maria',         'hanna.001@ski.sch.id',        Role::Student, 'X TKJ 1',    '1007'],
        ];

        foreach ($users as [$name, $email, $role, $className, $nis]) {
            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'password' => 'password', // di-hash otomatis oleh cast 'hashed' pada model User
                    'role' => $role,
                    'status' => UserStatus::Active,
                    'email_verified_at' => now(),
                ]
            );

            $user->profile()->updateOrCreate([], [
                'school_class_id' => $className ? SchoolClass::where('name', $className)->value('id') : null,
                'nis' => $nis,
                'city' => 'Pontianak',
            ]);
        }
    }
}
