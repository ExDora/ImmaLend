<?php

use App\Enums\LendingStatus;
use App\Models\Lending;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('admin can reject a pending lending', function () {
    $admin = User::factory()->admin()->create();
    $lending = Lending::factory()->create(['status' => LendingStatus::Pending]);

    $this->actingAs($admin)
        ->post(route('lendings.reject'), ['lending_id' => $lending->id])
        ->assertRedirect(route('lendings.admin-index'))
        ->assertSessionHas('success');

    $lending->refresh();

    expect($lending->status)->toBe(LendingStatus::Rejected)
        ->and($lending->processed_by)->toEqual($admin->id);
});

test('a lending that is not pending cannot be rejected', function () {
    $admin = User::factory()->admin()->create();
    $lending = Lending::factory()->create(['status' => LendingStatus::Approved]);

    $this->actingAs($admin)
        ->post(route('lendings.reject'), ['lending_id' => $lending->id])
        ->assertRedirect(route('lendings.admin-index'))
        ->assertSessionHas('error');

    expect($lending->refresh()->status)->toBe(LendingStatus::Approved);
});

test('lending_id is required and must exist', function () {
    $admin = User::factory()->admin()->create();

    $this->actingAs($admin)
        ->post(route('lendings.reject'), [])
        ->assertSessionHasErrors('lending_id');

    $this->actingAs($admin)
        ->post(route('lendings.reject'), ['lending_id' => 99999])
        ->assertSessionHasErrors('lending_id');
});

test('a student cannot reject a lending', function () {
    $student = User::factory()->student()->create();
    $lending = Lending::factory()->create(['status' => LendingStatus::Pending]);

    $this->actingAs($student)
        ->post(route('lendings.reject'), ['lending_id' => $lending->id])
        ->assertForbidden();

    expect($lending->refresh()->status)->toBe(LendingStatus::Pending);
});

test('a guest is redirected to the admin login', function () {
    $lending = Lending::factory()->create(['status' => LendingStatus::Pending]);

    $this->post(route('lendings.reject'), ['lending_id' => $lending->id])
        ->assertRedirect(route('admin.login'));
});