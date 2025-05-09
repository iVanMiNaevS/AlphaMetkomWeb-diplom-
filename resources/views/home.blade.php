@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
<section class="relative">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <img src="{{ asset('images/1.jpg') }}" alt="Металлоконструкции от Альфа Меткон" class="w-full h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold mb-2 md:mb-4">Промышленные металлоконструкции</h2>
                        <p class="text-sm md:text-xl mb-3 md:mb-6">Проектирование и строительство промышленных объектов любой сложности</p>

                    </div>
                </div>
            </div>

            <div class="swiper-slide relative">
                <img src="{{ asset('images/2.jpg') }}" alt="Строительные металлоконструкции" class="w-full h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold mb-2 md:mb-4">Каркасные здания</h2>
                        <p class="text-sm md:text-xl mb-3 md:mb-6">Быстровозводимые конструкции с гарантией качества</p>

                    </div>
                </div>
            </div>

            <div class="swiper-slide relative">
                <img src="{{ asset('images/3.jpg') }}" alt="Металлообработка" class="w-full h-[70vh] object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold mb-2 md:mb-4">Индивидуальные решения</h2>
                        <p class="text-sm md:text-xl mb-3 md:mb-6">Изготовление металлоконструкций по вашим чертежам</p>
                        <a href="/contacts" class="text-sm md:text-base bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 md:py-3 md:px-6 rounded-lg transition duration-300 inline-block">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="mt-20 py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 mb-6">
                Металлоконструкции в Рязани от ООО «Альфа Меткон»
            </h2>

            <div class="prose prose-lg text-gray-600 mb-8 text-left">
                <p class="mb-4">
                    Компания <strong>«АЛЬФА МЕТКОН»</strong> производит и устанавливает на объекте металлоконструкции разных форм, размеров, конфигураций, ценовой категории и назначения. Специалистам-разработчикам проектов и мастерам-монтажникам по плечу конструкции любой сложности.
                </p>

                <p class="mb-4">
                    Стоимость металлоконструкции и за услуги установки модели доступны в пределах финансовой досягаемости разным клиентам. При этом учитываются все запросы. Производственная организация может позволить снижение своих цен потому, что у нее имеются своя производственная база и цеха.
                </p>
            </div>

            <a href="/about" class="inline-block bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                Узнать Больше
            </a>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">Наша продукция и услуги</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            @foreach($services as $service)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full">
                <a href="{{ route('services.show', $service->slug) }}">

                    <div class="p-6 h-full flex flex-col">
                        <div class="bg-blue-100 w-14 h-14 rounded-full flex items-center justify-center mb-4">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{$service->title}}</h3>
                        <p class="text-gray-600 flex-grow">{{$service->description}}</p>
                    </div>
                </a>
            </div>
            @endforeach



        </div>
</section>
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Заказать обратный звонок</h3>
                <form action="{{ route('contact.request') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="callback">

                    <div class="mb-4">
                        <label for="callback-name" class="block text-gray-700 text-sm font-bold mb-2">Ваше имя *</label>
                        <input type="text" id="callback-name" name="name" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="callback-phone" class="block text-gray-700 text-sm font-bold mb-2">Телефон *</label>
                        <input type="tel" id="callback-phone" name="phone" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="+7 (XXX) XXX-XX-XX">
                    </div>

                    <div class="mb-6">
                        <label for="callback-time" class="block text-gray-700 text-sm font-bold mb-2">Удобное время для звонка</label>
                        <select id="callback-time" name="call_time"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="9-12">9:00 - 12:00</option>
                            <option value="12-15">12:00 - 15:00</option>
                            <option value="15-18">15:00 - 18:00</option>
                            <option value="18-21">18:00 - 21:00</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-900 to-blue-800 text-white py-3 px-4 rounded-md hover:from-blue-800 hover:to-blue-700 transition duration-300 font-medium">
                        Заказать звонок
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Написать сообщение</h3>
                <form action="{{ route('contact.request') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="email">

                    <div class="mb-4">
                        <label for="email-name" class="block text-gray-700 text-sm font-bold mb-2">Ваше имя *</label>
                        <input type="text" id="email-name" name="name" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="email-email" class="block text-gray-700 text-sm font-bold mb-2">Email *</label>
                        <input type="email" id="email-email" name="email" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="your@email.com">
                    </div>

                    <div class="mb-4">
                        <label for="email-subject" class="block text-gray-700 text-sm font-bold mb-2">Тема сообщения *</label>
                        <input type="text" id="email-subject" name="subject" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="email-message" class="block text-gray-700 text-sm font-bold mb-2">Сообщение *</label>
                        <textarea id="email-message" name="message" rows="4" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-900 to-blue-800 text-white py-3 px-4 rounded-md hover:from-blue-800 hover:to-blue-700 transition duration-300 font-medium">
                        Отправить сообщение
                    </button>
                </form>
            </div>
        </div>
    </div>

</section>
@if(session('success'))
<div id="success-notification"
    class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 opacity-0 transition-opacity duration-500">
    {{ session('success') }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notice = document.getElementById('success-notification');
        if (notice) {
            setTimeout(() => notice.classList.add('opacity-100'), 100);

            setTimeout(() => {
                notice.classList.remove('opacity-100');
                setTimeout(() => notice.remove(), 500);
            }, 5000);
        }
    });
</script>
@endif

@endsection