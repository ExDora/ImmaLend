<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Satu tabel users untuk Admin, Teacher, dan Student
     * (sesuai halaman Users (admin): kolom Role + Status).
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 20)->default('student')->after('password')
                ->comment('admin | teacher | student');
            $table->string('status', 20)->default('active')->after('role')
                ->comment('active | inactive');
            $table->string('google_id')->nullable()->unique()->after('status');
            $table->string('avatar')->nullable()->after('google_id');

            // Login Google boleh tanpa password lokal
            $table->string('password')->nullable()->change();

            $table->softDeletes();

            $table->index(['role', 'status']);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['role', 'status']);
            $table->dropSoftDeletes();
            $table->dropUnique(['google_id']);
            $table->dropColumn(['role', 'status', 'google_id', 'avatar']);
        });
    }
};
