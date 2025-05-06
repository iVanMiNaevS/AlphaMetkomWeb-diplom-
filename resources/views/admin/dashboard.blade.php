@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6">Админ-панель</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Статистика -->
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold text-blue-800">Пользователи</h3>
                <p class="text-3xl mt-2">1</p>
            </div>
            <div class="bg-green-50 p-4 rounded-lg">
                <h3 class="font-semibold text-green-800">Статьи</h3>
                <p class="text-3xl mt-2">0</p>
            </div>
            <div class="bg-purple-50 p-4 rounded-lg">
                <h3 class="font-semibold text-purple-800">Комментарии</h3>
                <p class="text-3xl mt-2">0</p>
            </div>
        </div>

        <div class="border-t pt-4">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="text-red-600 hover:text-red-800">
                    Выйти из системы
                </button>
            </form>
        </div>
    </div>
</div>
@endsection