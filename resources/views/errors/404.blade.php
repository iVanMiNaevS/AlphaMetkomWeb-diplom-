<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена | Альфа Меткон</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-900 to-blue-800 flex flex-col items-center justify-center text-white p-4">
    <div class="max-w-2xl mx-auto text-center">
        <div class="text-9xl font-bold mb-4 animate-bounce">404</div>
        <h1 class="text-4xl font-bold mb-6">Страница не найдена</h1>

        <p class="text-xl mb-8 opacity-90">
            К сожалению, запрашиваемая страница не существует или была перемещена.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('/') }}"
                class="px-6 py-3 bg-white text-blue-900 font-semibold rounded-lg hover:bg-gray-100 transition duration-300">
                На главную
            </a>
            <a href="{{ route('contact') }}"
                class="px-6 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-blue-900 transition duration-300">
                Связаться с нами
            </a>
        </div>

        <div class="mt-12 text-sm opacity-75">
            © {{ date('Y') }} Альфа Меткон - производство металлоконструкций в Рязани
        </div>
    </div>
</body>

</html>