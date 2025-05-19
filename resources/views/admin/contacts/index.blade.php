@extends('layouts.admin')

@section('title', 'Контакты компании')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Контакты компании</h2>
        <a href="{{ route('admin.contacts.create') }}"
            class="px-4 py-2 bg-blue-700 hover:bg-blue-700 text-white rounded-lg transition">
            + Добавить контакт
        </a>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg border border-green-200">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Тип</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Значение</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Действия</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($contacts as $contact)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $contact->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                        @switch($contact->type->name)
                        @case('address')
                        Адрес
                        @break
                        @case('phone')
                        Телефон
                        @break
                        @case('email')
                        Email
                        @break
                        @case('working_hours')
                        Время работы
                        @break
                        @case('inn')
                        ИНН
                        @break
                        @case('ogrn')
                        ОГРН
                        @break
                        @default
                        {{ $contact->type->name }}
                        @endswitch
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $contact->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.contacts.edit', $contact->id) }}"
                                class="text-blue-600 hover:text-blue-900">Редактировать</a>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Удалить контакт?')">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</div>
@endsection