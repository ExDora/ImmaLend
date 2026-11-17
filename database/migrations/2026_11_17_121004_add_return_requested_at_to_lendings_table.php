<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * - Status 'borrowed' tidak disimpan lagi (dihitung dari tanggal).
     * - Tambah waktu user menekan "Return Item".
     * - Index pada status untuk filter tab Pending/Approved/dst.
     */
    public function up(): void
    {
        DB::table('lendings')->where('status', 'borrowed')->update(['status' => 'approved']);

        Schema::table('lendings', function (Blueprint $table) {
            $table->dateTime('return_requested_at')->nullable()->after('return_at');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::table('lendings', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropColumn('return_requested_at');
        });
    }
};