<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доступ запрещен | Альфа Меткон</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-900 to-blue-800 flex flex-col items-center justify-center text-white p-4">
    <div class="max-w-2xl mx-auto text-center">
        <div class="flex justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
        </div>

        <h1 class="text-4xl font-bold mb-4">403 | Доступ запрещен</h1>

        <p class="text-xl mb-8 opacity-90">
            У вас нет прав для доступа к этой странице.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('/') }}"
                class="px-6 py-3 bg-white text-blue-900 font-semibold rounded-lg hover:bg-gray-100 transition duration-300">
                На главную
            </a>

            @auth
            <a href="{{ url()->previous() }}"
                class="px-6 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-blue-900 transition duration-300">
                Вернуться назад
            </a>
            @else
            <a href="{{ route('login') }}"
                class="px-6 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-blue-900 transition duration-300">
                Войти в систему
            </a>
            @endauth
        </div>

        <div class="mt-12 text-sm opacity-75">
            © {{ date('Y') }} Альфа Меткон - производство металлоконструкций в Рязани
        </div>
    </div>
</body>

</html>