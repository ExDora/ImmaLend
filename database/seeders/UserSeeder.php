<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['Admin Utama', 'admin@ski.sch.id', 'administrator', null],
            ['Andika Luxius', 'andika.001@ski.sch.id', 'teacher', null],
            ['Felicia Gracia', 'felicia.001@ski.sch.id', 'teacher', null],
            ['Andreas Nathaniel', 'andreas.001@ski.sch.id', 'student', 'XI RPL 1'],
            ['Brianna Rachel', 'brianna.002@ski.sch.id', 'student', 'XI RPL 1'],
            ['Christopher Rafael', 'christopher.003@ski.sch.id', 'student', 'XI RPL 2'],
            ['Devina Valencia', 'devina.001@ski.sch.id', 'student', 'XI RPL 2'],
            ['Ezra Zefanya', 'ezra.001@ski.sch.id', 'student', 'X RPL 1'],
        ];

        foreach ($users as [$name, $email, $role, $class]) {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => 'password',
                'role' => $role,
                'status' => 'active',
                'school_class' => $class,
            ]);
        }
    }
}
