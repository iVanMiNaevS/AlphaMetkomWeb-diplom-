<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Альфа Меткон | Металлоконструкции')</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .header {
            background: linear-gradient(to right, #1e3a8a, #1e40af);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .desktop-menu .dropdown-container {
            position: relative;
        }

        .desktop-menu .dropdown-menu {
            position: absolute;
            left: 0;
            top: 100%;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            transform: translateY(10px);
        }

        .desktop-menu .dropdown-container:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .mobile-menu.active {
            max-height: 100vh;
        }

        .services-dropdown {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .services-dropdown.active {
            max-height: 500px;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <header class="header text-white sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="flex items-center space-x-2">
                    <div class="bg-white p-1 rounded">
                        <img src="{{ asset('images/logo2.svg') }}" alt="Альфа Меткон" class="h-12 w-12">
                    </div>
                    <span class="text-xl font-bold">Альфа Меткон</span>
                </a>

                <nav class="desktop-menu hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link">Главная</a>
                    <a href="/about" class="nav-link">О компании</a>
                    <a href="/news" class="nav-link">Новости</a>
                    @auth
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        Админ-панель
                    </a>
                    @endauth

                    <div class="dropdown-container">
                        <button class="nav-link flex items-center">
                            <span>Услуги</span>
                            <img src="{{ asset('images/icon-row-white.png') }}" alt="Альфа Меткон" class="h-3 w-3">
                        </button>
                        @php
                        $menuService = new \App\Services\HeaderMenuService();
                        $services = $menuService->getServices();
                        @endphp
                        <div class="dropdown-menu w-56 bg-white rounded-md shadow-lg py-1 z-50">
                            @foreach($services as $service)
                            <a href="{{ route('services.show',$service->slug) }}"
                                class="block px-4 py-2 text-gray-800 hover:bg-blue-50">
                                {{ $service->title }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <a href="/contacts" class="nav-link">Контакты</a>
                </nav>

                <button class="md:hidden menu-btn text-white focus:outline-none">
                    <img src="{{ asset('images/burger.png') }}" alt="burger" class="h-6 w-6">
                </button>
            </div>

            <div class="mobile-menu md:hidden bg-blue-800">
                <div class="container mx-auto px-4 py-2">
                    <a href="/" class="block py-3 text-blue-100 hover:text-white border-b border-blue-700">Главная</a>
                    <a href="/about" class="block py-3 text-blue-100 hover:text-white border-b border-blue-700">О компании</a>
                    <a href="/news" class="block py-3 text-blue-100 hover:text-white border-b border-blue-700">Новости</a>
                    @auth
                    <a href="{{ route('admin.dashboard') }}" class="block py-3 text-blue-100 hover:text-white border-b border-blue-700">
                        Админ-панель
                    </a>
                    @endauth
                    <div class="border-b border-blue-700">
                        <button class="w-full flex justify-between items-center py-3 text-blue-100 hover:text-white services-btn">
                            <span>Услуги</span>
                            <img src="{{ asset('images/icon-row-white.png') }}" alt="Альфа Меткон" class="h-3 w-3">
                        </button>

                        <div class="services-dropdown pl-4">
                            @foreach($services as $service)
                            <a href="{{ route('services.show',$service->slug) }}"
                                class="block py-2 text-blue-200 hover:text-white">
                                {{ $service->title }}
                            </a>
                            @endforeach

                        </div>
                    </div>
                    <a href="/contacts" class="block py-3 text-blue-100 hover:text-white">Контакты</a>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
    @php
    $footerService = new \App\Services\FooterContactsService();
    $contacts = $footerService->getContacts();
    @endphp
    <footer class="bg-gradient-to-r from-blue-900 to-blue-800 text-white shadow-md mt-auto">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-white p-1 rounded mr-2">
                            <img src="{{ asset('images/logo2.svg') }}" alt="Альфа Меткон" class="h-16">
                        </div>
                        <span class="text-xl font-bold">Альфа Меткон</span>
                    </div>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-blue-200 transition">Главная</a></li>
                        <li><a href="/about" class="hover:text-blue-200 transition">О нас</a></li>
                        <li><a href="/news" class="hover:text-blue-200 transition">Новости</a></li>
                        <li><a href="/contacts" class="hover:text-blue-200 transition">Контакты</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Контакты</h3>
                    <address class="not-italic">
                        @if($contacts['address'])
                        <div class="mb-2">
                            <strong>Адрес:</strong><br>
                            {{ $contacts['address']->title }}
                        </div>
                        @endif

                        @if($contacts['phones']->isNotEmpty())
                        <div class="mb-2">
                            <strong>Телефоны:</strong><br>
                            @foreach($contacts['phones'] as $phone)
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone->title) }}" class="hover:text-blue-200 transition">
                                {{ $phone->title }}
                            </a><br>
                            @endforeach
                        </div>
                        @endif

                        @if($contacts['emails']->isNotEmpty())
                        <div class="mb-2">
                            <strong>E-mail:</strong><br>
                            @foreach($contacts['emails'] as $email)
                            <a href="mailto:{{ $email->title }}" class="hover:text-blue-200 transition">
                                {{ $email->title }}
                            </a><br>
                            @endforeach
                        </div>
                        @endif

                        @if($contacts['working_hours'])
                        <div>
                            <strong>Время работы:</strong><br>
                            {{ $contacts['working_hours']->title }}
                        </div>
                        @endif
                    </address>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Реквизиты</h3>
                    <div class="space-y-2">
                        @if($contacts['requisites']['inn'])
                        <div>
                            <strong>ИНН:</strong> {{ $contacts['requisites']['inn']->title }}
                        </div>
                        @endif
                        @if($contacts['requisites']['ogrn'])
                        <div>
                            <strong>ОГРН:</strong> {{ $contacts['requisites']['ogrn']->title }}
                        </div>
                        @endif
                    </div>
                </div>

                <div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Поделиться</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="hover:text-blue-200 transition" aria-label="Telegram">
                                <img src="{{ asset('images/telegram-svgrepo-com.svg') }}" alt="Telegram" class="h-8 w-8">
                            </a>
                            <a href="#" class="hover:text-blue-200 transition" aria-label="ВКонтакте">
                                <img src="{{ asset('images/vk-svgrepo-com.svg') }}" alt="ВКонтакте" class="h-8 w-8">
                            </a>
                            <a href="#" class="hover:text-blue-200 transition" aria-label="Одноклассники">
                                <img src="{{ asset('images/odnoklassniki.png') }}" alt="Одноклассники" class="h-8 w-8">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-700 mt-8 pt-6 text-center">
                <p>&copy; 2025 Альфа Меткон. Все права защищены.</p>
            </div>
        </div>
    </footer>
    @vite(['resources/js/app.js'])
</body>

</html>