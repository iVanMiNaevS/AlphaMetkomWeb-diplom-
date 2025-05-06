<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Альфа Меткон | Металлоконструкции')</title>
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
                        <img src="{{ asset('images/logo.png') }}" alt="Альфа Меткон" class="h-8 w-8">
                    </div>
                    <span class="text-xl font-bold">Альфа Меткон</span>
                </a>

                <nav class="desktop-menu hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link">Главная</a>
                    <a href="/about" class="nav-link">О компании</a>

                    <div class="dropdown-container">
                        <button class="nav-link flex items-center">
                            Услуги
                            <img src="{{ asset('images/icon-row-white.png') }}" alt="Альфа Меткон" class="h-3 w-3">
                        </button>

                        <div class="dropdown-menu w-56 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="/services/installation" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Монтаж конструкций</a>
                            <a href="/services/production" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Производство</a>
                            <a href="/services/design" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Проектирование</a>
                            <a href="/services/repair" class="block px-4 py-2 text-gray-800 hover:bg-blue-50">Ремонт конструкций</a>
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
                    <div class="border-b border-blue-700">
                        <button class="w-full flex justify-between items-center py-3 text-blue-100 hover:text-white services-btn">
                            <span>Услуги</span>
                            <svg class="w-4 h-4 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="services-dropdown pl-4">
                            <a href="/services/installation" class="block py-2 text-blue-200 hover:text-white">Монтаж</a>
                            <a href="/services/production" class="block py-2 text-blue-200 hover:text-white">Производство</a>
                            <a href="/services/design" class="block py-2 text-blue-200 hover:text-white">Проектирование</a>
                            <a href="/services/repair" class="block py-2 text-blue-200 hover:text-white">Ремонт</a>
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

    @vite(['resources/js/app.js'])
</body>

</html>