@extends('layouts.app')

@section('title', 'Производство металлоконструкций по чертежам')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Производство металлоконструкций по чертежам</h1>

            <div class="prose prose-lg text-gray-600 max-w-none">
                <p class="text-xl mb-6">
                    Индивидуальное изготовление металлических конструкций любой сложности по вашим техническим заданиям и чертежам.
                </p>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <img src="{{ asset('images/custom-production/default/diploma.webp') }}" alt="Каркас здания" class="rounded-lg shadow-md">
                    <img src="{{ asset('images/custom-production/default/1677970823_bigfoto-name-p-kapitalnii-remont-pomeshchenii-82.jpg') }}" alt="Готовое здание" class="rounded-lg shadow-md">
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Наши возможности</h2>
                <ul class="list-disc pl-5 mb-8 space-y-2">
                    <li>Работаем с чертежами любой сложности</li>
                    <li>Используем сталь толщиной от 1 до 50 мм</li>
                    <li>Выполняем полный цикл: от резки до покраски</li>
                    <li>Гарантия точного соответствия размерам</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Примеры изделий</h2>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Нестандартные фермы</h3>
                        <p>Для сложных архитектурных решений</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Опорные конструкции</h3>
                        <p>Выдерживающие экстремальные нагрузки</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Декоративные элементы</h3>
                        <p>Кованые детали, фасадные конструкции</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Спецтехника</h3>
                        <p>Платформы, рамы, крепления</p>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Технологический процесс</h2>
                    <ol class="list-decimal pl-5 space-y-3">
                        <li>Анализ чертежей и ТЗ</li>
                        <li>Подбор материалов и технологии</li>
                        <li>Лазерная резка и гибка металла</li>
                        <li>Сварка и обработка швов</li>
                        <li>Пескоструйная очистка</li>
                        <li>Грунтовка и покраска</li>
                    </ol>
                </div>

                <div class="text-center mt-12">
                    <a href="/contacts" class="inline-block bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300">
                        Отправить чертеж
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection