@extends('layouts.app')

@section('title', 'Контакты Альфа Меткон')

@section('content')

<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Контакты</h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">Контактные данные</h2>

                <div class="space-y-4">
                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Адрес:</h3>
                        <p class="text-gray-600">Россия, Рязань, район Южный Промышленный узел, 13</p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Телефоны:</h3>
                        <p class="text-gray-600">
                            <a href="tel:+79038362609" class="hover:text-blue-700">+7 903 836-26-09</a><br>
                            <a href="tel:+79206311114" class="hover:text-blue-700">+7 920 631-11-14</a>
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Email:</h3>
                        <p class="text-gray-600">
                            <a href="mailto:alfametkon@mail.ru" class="hover:text-blue-700">alfametkon@mail.ru</a><br>
                            <a href="mailto:info@alfametkon.ru" class="hover:text-blue-700">info@alfametkon.ru</a>
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Режим работы:</h3>
                        <p class="text-gray-600">Пн-Пт: 9:00 - 18:00<br>Сб-Вс: выходной</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gray-100 rounded-xl overflow-hidden" style="height: 400px;">

                <div id="yandex-map" class="w-full h-full">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A07c7f8c6f8bfa6113b9ef277e3d2a7b2eed256b085bd4c6066a03fde97fbf181&amp;source=constructor" class="w-full h-full" frameborder="0"></iframe>
                </div>
            </div>
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