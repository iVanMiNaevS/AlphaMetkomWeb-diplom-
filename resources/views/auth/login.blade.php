<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в админку</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="login-form bg-white rounded-lg p-8">
            <h1 class="text-2xl font-bold mb-6 text-center">Вход в админ-панель</h1>

            @if($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border rounded"
                        value="admin@example.com" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Пароль</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border rounded"
                        value="admin" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Войти
                </button>
            </form>
        </div>
    </div>
</body>

</html>