@extends('layouts.app')

@section('title', 'Быстровозводимые здания из металлоконструкций')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Быстровозводимые здания из металлоконструкций</h1>

            <div class="prose prose-lg text-gray-600 max-w-none">
                <p class="text-xl mb-6">
                    Быстровозводимые здания из высокопрочной стали с надежным каркасом и креплениями. Легкая облицовка сэндвич-панелями и другими современными материалами.
                </p>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <img src="{{ asset('images/fast-buildings/default/1745017176_photo_2025-04-18_16-40-17.jpg') }}" alt="Каркас здания" class="rounded-lg shadow-md">
                    <img src="{{ asset('images/fast-buildings/default/1745018253_photo_2025-04-18_16-39-44.jpg') }}" alt="Готовое здание" class="rounded-lg shadow-md">
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Преимущества технологии</h2>
                <ul class="list-disc pl-5 mb-8 space-y-2">
                    <li>Сокращение сроков строительства в 2-3 раза</li>
                    <li>Снижение стоимости на 30-40% по сравнению с традиционными методами</li>
                    <li>Возможность монтажа в любое время года</li>
                    <li>Легкость последующего расширения</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Области применения</h2>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Коммерческие объекты</h3>
                        <p>Торговые центры, автомойки, СТО, магазины</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Промышленные здания</h3>
                        <p>Цеха, склады, логистические комплексы</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Сельское хозяйство</h3>
                        <p>Ангары для техники, хранилища, фермы</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Частное строительство</h3>
                        <p>Гаражи, мастерские, дачные дома</p>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Этапы работы</h2>
                    <ol class="list-decimal pl-5 space-y-3">
                        <li>Проектирование и расчет нагрузок</li>
                        <li>Изготовление конструкций на производстве</li>
                        <li>Подготовка фундамента</li>
                        <li>Монтаж каркаса (3-7 дней)</li>
                        <li>Утепление и отделка</li>
                        <li>Подведение коммуникаций</li>
                    </ol>
                </div>

                <div class="text-center mt-12">
                    <a href="/contacts" class="inline-block bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300">
                        Заказать расчет
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection