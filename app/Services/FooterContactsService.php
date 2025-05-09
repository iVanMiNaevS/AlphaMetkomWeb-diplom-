<?php

namespace App\Services;

use App\Models\Contact;

class FooterContactsService
{
    public function getContacts()
    {
        return [
            'address' => Contact::whereHas('type', function ($q) {
                $q->where('name', 'address');
            })->first(),
            'phones' => Contact::whereHas('type', function ($q) {
                $q->where('name', 'phone');
            })->get(),
            'emails' => Contact::whereHas('type', function ($q) {
                $q->where('name', 'email');
            })->get(),
            'working_hours' => Contact::whereHas('type', function ($q) {
                $q->where('name', 'working_hours');
            })->first(),
            'requisites' => [
                'inn' => Contact::whereHas('type', function ($q) {
                    $q->where('name', 'inn');
                })->first(),
                'ogrn' => Contact::whereHas('type', function ($q) {
                    $q->where('name', 'ogrn');
                })->first(),
            ]
        ];
    }
}
