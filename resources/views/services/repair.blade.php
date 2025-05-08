@extends('layouts.app')

@section('title', 'Ремонт металлоконструкций')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Ремонт и усиление металлоконструкций</h1>

            <div class="prose prose-lg text-gray-600 max-w-none">
                <p class="text-xl mb-6">
                    Восстановление несущей способности и продление срока службы металлических конструкций любой сложности.
                </p>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <img src="{{ asset('images/repair/default/diploma.webp') }}" alt="Каркас здания" class="rounded-lg shadow-md">
                    <img src="{{ asset('images/repair/default/i.webp') }}" alt="Каркас здания" class="rounded-lg shadow-md">
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Наши услуги</h2>
                <ul class="list-disc pl-5 mb-8 space-y-2">
                    <li>Диагностика состояния конструкций</li>
                    <li>Устранение коррозии и повреждений</li>
                    <li>Усиление несущих элементов</li>
                    <li>Замена дефектных участков</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Типовые случаи</h2>
                <div class="grid md:grid-cols-2 gap-4 mb-8">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Коррозионные повреждения</h3>
                        <p>Восстановление защитного покрытия</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Механические повреждения</h3>
                        <p>Ремонт вмятин, трещин, разрывов</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Увеличение нагрузок</h3>
                        <p>Усиление конструкций</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Аварийные ситуации</h3>
                        <p>Срочный ремонт несущих элементов</p>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-xl mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Наш подход</h2>
                    <ol class="list-decimal pl-5 space-y-3">
                        <li>Визуальный и инструментальный осмотр</li>
                        <li>Разработка методики ремонта</li>
                        <li>Выполнение работ без остановки производства</li>
                        <li>Контроль качества после ремонта</li>
                    </ol>
                </div>

                <div class="text-center mt-12">
                    <a href="/contacts" class="inline-block bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300">
                        Вызвать специалиста
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection