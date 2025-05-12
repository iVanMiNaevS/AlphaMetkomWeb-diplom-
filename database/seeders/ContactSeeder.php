<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'contact_type_id' => ContactType::where('name', 'phone')->first()->id,
                'title' => '+7 903 836-26-09'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'phone')->first()->id,
                'title' => '+7 920 631-11-14'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'email')->first()->id,
                'title' => 'alfametkon@mail.ru'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'email')->first()->id,
                'title' => 'info@alfametkon.ru'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'address')->first()->id,
                'title' => 'Россия, Рязань, район Южный Промышленный узел, 13'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'working_hours')->first()->id,
                'title' => 'Пн - Пт: 10.00-20.00'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'inn')->first()->id,
                'title' => '6230109878'
            ],
            [
                'contact_type_id' => ContactType::where('name', 'ogrn')->first()->id,
                'title' => '1186234010050'
            ]
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
