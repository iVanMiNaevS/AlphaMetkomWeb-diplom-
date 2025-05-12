<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class NewsSeeder extends Seeder
{
    public function run()
    {
        try {
            Storage::disk('public')->deleteDirectory('news');
            Storage::disk('public')->makeDirectory('news');

            $companyNews = NewsCategory::firstOrCreate(
                ['slug' => 'company-news'],
                ['name' => 'Новости компании']
            );

            $technologies = NewsCategory::firstOrCreate(
                ['slug' => 'technologies'],
                ['name' => 'Технологии']
            );

            $news = [
                [
                    'title' => 'Открытие нового цеха',
                    'description' => 'Мы рады сообщить о вводе в эксплуатацию нового производственного цеха',
                    'category_id' => $companyNews->id,
                    'image_path' => $this->storeImage('33-1.jpg'), // Измените на реальные имена файлов
                    'content' => '<p>Компания "Альфа Меткон" завершила строительство нового цеха площадью 2000 кв.м.</p>'
                ],
                [
                    'title' => 'Получение сертификата ISO',
                    'description' => 'Официальное подтверждение соответствия международным стандартам',
                    'category_id' => $companyNews->id,
                    'image_path' => $this->storeImage('33-1.jpg'),
                    'content' => '<p>Наша система менеджмента качества сертифицирована по стандарту ISO 9001:2015.</p>'
                ],
                [
                    'title' => 'Новые технологии лазерной резки',
                    'description' => 'Внедрение инновационных методов обработки металла',
                    'category_id' => $technologies->id,
                    'image_path' => $this->storeImage('33-1.jpg'),
                    'content' => '<p>Мы начали использовать современные лазерные станки с ЧПУ.</p>'
                ],
                [
                    'title' => 'Экологичное порошковое покрытие',
                    'description' => 'Переход на новые экологичные материалы для покраски',
                    'category_id' => $technologies->id,
                    'image_path' => $this->storeImage('33-1.jpg'),
                    'content' => '<p>Теперь используем только экологически безопасные порошковые краски.</p>'
                ]
            ];

            foreach ($news as $item) {
                News::create($item);
            }
        } catch (\Exception $e) {
        }
    }

    private function storeImage(string $filename): string
    {
        $sourcePath = base_path('database/seeders/images/news/' . $filename);

        if (!file_exists($sourcePath)) {
            Log::error("Файл изображения не найден: {$sourcePath}");
            throw new \Exception("Файл изображения не найден: {$filename}");
        }

        $destinationPath = "news/{$filename}";

        Storage::disk('public')->put(
            $destinationPath,
            file_get_contents($sourcePath)
        );

        return $destinationPath;
    }
}
