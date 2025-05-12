<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Быстровозводимые здания',
                'description' => 'Быстровозводимые здания из высокопрочной стали с надежным каркасом и креплениями. Легкая облицовка сэндвич-панелями и другими современными материалами.',
                'slug' => 'fast-buildings'
            ],
            [
                'title' => 'Производство по чертежам',
                'description' => 'Индивидуальное изготовление металлических конструкций любой сложности по вашим техническим заданиям и чертежам.',
                'slug' => 'custom-production'
            ],
            [
                'title' => 'Проектирование металлоконструкций',
                'description' => 'Полный цикл проектных работ - от технического задания до рабочей документации с учетом всех нормативов и требований.',
                'slug' => 'design'
            ],
            [
                'title' => 'Ремонт металлоконструкций',
                'description' => 'Восстановление несущей способности и продление срока службы металлических конструкций любой сложности.',
                'slug' => 'repair'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
