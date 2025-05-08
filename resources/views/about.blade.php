@extends('layouts.app')

@section('title', 'О компании Альфа Меткон')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-8 text-center">
                Металлоконструкции на заказ в Рязани от ООО «АЛЬФА МЕТКОН»
            </h1>

            <div class="prose prose-lg text-gray-600 max-w-none">
                <div class="mb-12">
                    <p class="mb-6 text-lg">
                        <strong>ООО «Альфа Меткон»</strong> – один из ведущих изготовителей высококачественных, прочных и долговечных металлоконструкций в Рязани.
                    </p>

                    <p class="mb-6">
                        Наш завод выпускает изделия разной сложности, стоимости, габаритов и целевого назначения. Все конструкции проходят нормоконтроль на соответствие стандартам качества. Бракованные партии исключены. У нас всегда доступная цена, грамотные консультации, комфортные условия доставки и монтажа.
                    </p>
                </div>

                <div class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Наши услуги</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">
                                <a href="{{route('services.fast-buildings')}}" class="hover:text-blue-500">Быстровозводимые здания</a>
                            </h3>

                            <p class="text-gray-600">Полный цикл от проектирования до монтажа зданий любой сложности.</p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">
                                <a href="{{route('services.custom-production')}}" class="hover:text-blue-500">Производство по чертежу</a>
                            </h3>
                            <p class="text-gray-600">Изготовление металлоконструкций по индивидуальным чертежам заказчика.</p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3">
                                <a href="{{route('services.design')}}" class="hover:text-blue-500">Проектирование</a>
                            </h3>
                            <p class="text-gray-600">Разработка проектной документации с учетом всех технических требований.</p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <h3 class="text-xl font-semibold text-blue-800 mb-3"><a href="{{route('services.repair')}}" class=" hover:text-blue-500">Ремонт конструкций</a></h3>
                            <p class="text-gray-600">Восстановление и усиление металлических конструкций любого типа.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Здания из металлоконструкций</h2>
                    <p class="mb-4">
                        Сборка осуществляется из ЛСТК (стальных тонкостенных) и ЛМК (легких металлических) изделий. Всё устанавливается на стационарном фундаменте. Проектировать можно ангары, производственные цеха, складские помещения, хранилища, торговые павильоны и другие сооружения.
                    </p>
                </div>

                <div class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Технология производства</h2>
                    <p class="mb-4">
                        Исходный материал проходит этап укрытия слоем защитного напыления, чтобы предотвратить разрушение металлической структуры под воздействием внешних факторов.
                    </p>
                    <ul class="list-disc pl-5 mb-6 space-y-2">
                        <li>Резка и гибка металла</li>
                        <li>Сварочные работы</li>
                        <li>Шлифование соединительных швов</li>
                        <li>Защитное оцинковывание</li>
                        <li>Секционная сборка конструкции</li>
                    </ul>
                    <p>
                        Все изделия соответствуют требованиям ГОСТ 23118-2012 – «Конструкции стальные строительные».
                    </p>
                </div>

                <div class="mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Преимущества сотрудничества</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Высокое качество готовой продукции</span>
                                </li>
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Короткие сроки выполнения заказа</span>
                                </li>
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Работа по типовым и индивидуальным чертежам</span>
                                </li>
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Полный цикл монтажных работ</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Собственные производственные мощности</span>
                                </li>
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Профессиональное оборудование</span>
                                </li>
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Квалифицированные специалисты</span>
                                </li>
                                <li class="flex items-start">
                                    <img class="h-5 w-5" src="{{asset('images/icon-down-blue.png')}}" alt="row">
                                    <span>Гарантия на все виды работ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Сотрудничество с Альфа Меткон</h2>
                    <p class="mb-6">
                        Металлоконструкции в Рязани и Рязанской области на заказ для юридических и физических лиц. Приносите нам свою идею, и мы поможем профессионально ее реализовать. Если у вас уже есть готовый проект, наши специалисты точно и в срок выполнят заказ.
                    </p>
                    <a href="/contacts" class="inline-block bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300">
                        Связаться с нами
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection