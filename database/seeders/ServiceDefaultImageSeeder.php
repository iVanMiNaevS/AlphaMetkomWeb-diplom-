<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceDefaultImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ServiceDefaultImageSeeder extends Seeder
{
    public function run(): void
    {
        Storage::disk('public')->deleteDirectory('custom-production');
        Storage::disk('public')->deleteDirectory('design');
        Storage::disk('public')->deleteDirectory('fast-buildings');
        Storage::disk('public')->deleteDirectory('repair');

        $services = Service::all();

        $serviceImages = [
            'custom-production' => [
                '1677970823_bigfoto-name-p-kapitalnii-remont-pomeshchenii-82.jpg',
                'diploma.webp'
            ],
            'design' => [
                'scale_1200.jpg',
                'shutterstock_8504203-scaled.jpg'
            ],
            'fast-buildings' => [
                '1745017176_photo_2025-04-18_16-40-17.jpg',
                '1745018253_photo_2025-04-18_16-39-44.jpg'
            ],
            'repair' => [
                'diploma.webp',
                'i.webp'
            ]
        ];

        foreach ($services as $service) {
            if (isset($serviceImages[$service->slug])) {
                try {
                    Storage::disk('public')->makeDirectory($service->slug);

                    foreach ($serviceImages[$service->slug] as $imageName) {
                        $sourcePath = database_path("seeders/images/{$service->slug}/{$imageName}");

                        if (!file_exists($sourcePath)) {
                            Log::error("Файл не найден: {$sourcePath}");
                            continue;
                        }

                        $destinationPath = "{$service->slug}/{$imageName}";

                        Storage::disk('public')->put(
                            $destinationPath,
                            file_get_contents($sourcePath)
                        );

                        ServiceDefaultImage::create([
                            'service_id' => $service->id,
                            'image_path' => $destinationPath
                        ]);
                    }
                } catch (\Exception $e) {
                    Log::error("Ошибка при обработке сервиса {$service->slug}: " . $e->getMessage());
                }
            }
        }
    }
}
