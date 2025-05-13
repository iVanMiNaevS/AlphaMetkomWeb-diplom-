<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель | Альфа Меткон</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        input {
            outline: none;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-64 bg-gradient-to-b from-blue-900 to-blue-800 text-white p-4">
            <h1 class="text-2xl font-bold mb-6">Альфа Меткон</h1>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-700 transition">Главная</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 transition">Новости</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 transition">Услуги</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news-categories.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 transition">Категории новостей</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contacts.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 transition">Контакты</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contact-requests.index') }}" class="block px-4 py-2 rounded hover:bg-blue-700 transition">Запросы</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex-1 overflow-auto">
            <header class="bg-white shadow p-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">@yield('title')</h2>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="text-blue-800 hover:text-blue-600">Выйти</button>
                    </form>
                </div>
            </header>
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>