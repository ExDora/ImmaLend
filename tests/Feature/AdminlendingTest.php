<?php

use App\Enums\LendingStatus;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('admin sees pending lendings and not rejected ones on the default tab', function () {
    $this->withoutVite();

    $admin = User::factory()->admin()->create();

    Lending::factory()->create([
        'user_id' => User::factory()->create(['name' => 'Pending Person']),
        'status' => LendingStatus::Pending,
    ]);
    Lending::factory()->create([
        'user_id' => User::factory()->create(['name' => 'Rejected Person']),
        'status' => LendingStatus::Rejected,
    ]);

    $this->actingAs($admin)
        ->get(route('lendings.admin-index'))
        ->assertOk()
        ->assertSee('Pending Person')
        ->assertDontSee('Rejected Person');
});

test('the rejected tab shows rejected lendings', function () {
    $this->withoutVite();

    $admin = User::factory()->admin()->create();

    Lending::factory()->create([
        'user_id' => User::factory()->create(['name' => 'Rejected Person']),
        'status' => LendingStatus::Rejected,
    ]);

    $this->actingAs($admin)
        ->get(route('lendings.admin-index', ['status' => 'rejected']))
        ->assertOk()
        ->assertSee('Rejected Person');
});

test('a student cannot open the borrowing requests page', function () {
    $student = User::factory()->student()->create();

    $this->actingAs($student)
        ->get(route('lendings.admin-index'))
        ->assertForbidden();
});