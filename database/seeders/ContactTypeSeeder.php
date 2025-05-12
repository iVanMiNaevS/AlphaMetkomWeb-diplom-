<?php

namespace Database\Seeders;

use App\Models\ContactType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'phone'],
            ['name' => 'email'],
            ['name' => 'address'],
            ['name' => 'working_hours'],
            ['name' => 'inn'],
            ['name' => 'ogrn']
        ];

        foreach ($types as $type) {
            ContactType::create($type);
        }
    }
}
