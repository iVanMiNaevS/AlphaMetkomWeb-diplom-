<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запуск миграции
     */
    public function up(): void
    {
        // Проверяем, нет ли уже админа в базе
        $adminExists = DB::table('users')
            ->where('email', 'admin@example.com')
            ->exists();

        if (!$adminExists) {
            DB::table('users')->insert([
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'), // Пароль: admin
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Откат миграции (опционально)
     */
    public function down(): void
    {
        DB::table('users')
            ->where('email', 'admin@example.com')
            ->delete();
    }
};
