@extends('layouts.app')

@section('title', 'Проектирование металлоконструкций')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">{{$service->title}}</h1>

            <div class="prose prose-lg text-gray-600 max-w-none">
                <p class="text-xl mb-6">
                    {{$service->description}}
                </p>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    @foreach($service->defaultImages as $image)
                    <img
                        src="{{ asset('storage/' . $image->image_path) }}"
                        alt="{{ $image->alt ?? 'Изображение услуги' }}"
                        class="rounded-lg shadow-md"
                        loading="lazy">
                    @endforeach
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Наши компетенции</h2>
                <ul class="list-disc pl-5 mb-8 space-y-2">
                    <li>Расчет нагрузок и прочности конструкций</li>
                    <li>3D-моделирование и визуализация</li>
                    <li>Разработка КМ и КМД чертежей</li>
                    <li>Согласование в надзорных органах</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Этапы проектирования</h2>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Техническое задание</h3>
                        <p>Фиксация всех требований и пожеланий</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Эскизный проект</h3>
                        <p>3D-визуализация и принципиальные решения</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Рабочая документация</h3>
                        <p>Чертежи КМ и КМД, спецификации</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Авторский надзор</h3>
                        <p>Контроль реализации проекта</p>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Почему выбирают нас</h2>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>15 лет опыта в проектировании</li>
                        <li>Используем современные САПР (Autodesk Inventor, Компас-3D)</li>
                        <li>Собственный отдел проектирования</li>
                        <li>Гарантия прохождения экспертизы</li>
                    </ul>
                </div>

                <div class="text-center mt-12">
                    <a href="/contacts" class="inline-block bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300">
                        Обсудить проект
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection