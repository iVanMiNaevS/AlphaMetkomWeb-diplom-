@extends('layouts.admin')

@section('title', 'Главная админ-панели')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-8">Админ-панель</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Статистика по запросам -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <h3 class="text-lg font-medium mb-2">Запросы пользователей</h3>
            <p class="text-3xl font-bold mb-3">{{ $contactRequestsCount }}</p>
            <a href="{{ route('admin.contact-requests.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">
                Посмотреть все →
            </a>
        </div>

        <!-- Статистика по новостям -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <h3 class="text-lg font-medium mb-2">Новости</h3>
            <p class="text-3xl font-bold mb-3">{{ $newsCount }}</p>
            <a href="{{ route('admin.news.index') }}" class="text-green-600 hover:text-green-800 text-sm">
                Посмотреть все →
            </a>
        </div>

        <!-- Статистика по услугам -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
            <h3 class="text-lg font-medium mb-2">Услуги</h3>
            <p class="text-3xl font-bold mb-3">{{ $servicesCount }}</p>
            <a href="{{ route('admin.services.index') }}" class="text-purple-600 hover:text-purple-800 text-sm">
                Посмотреть все →
            </a>
        </div>
    </div>

    <!-- Последние запросы -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Последние запросы</h2>
            <a href="{{ route('admin.contact-requests.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">
                Все запросы →
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Имя</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Тип</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Контакты</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Дата</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recentRequests as $request)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            {{ $request->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            @if($request->type === 'call')
                            Звонок
                            @else
                            Письмо
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            @if($request->phone)
                            {{ $request->phone }}
                            @else
                            {{ $request->email }}
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            {{ $request->created_at->format('d.m.Y H:i') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                            Нет запросов
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection