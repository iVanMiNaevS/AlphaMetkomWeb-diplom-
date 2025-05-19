@extends('layouts.admin')

@section('title', 'Запросы пользователей')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Запросы пользователей</h2>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Имя</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Контакты</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Текст сообщения</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Статус</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Дата</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Действия</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($requests as $request)
                <tr class="{{ $request->processed ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $request->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        @if($request->type === 'callback')
                        Обратный звонок
                        @elseif($request->type === 'email')
                        Письмо на почту
                        @else
                        {{ $request->type }}
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $request->name }}
                        @if($request->subject)
                        <div class="text-xs text-gray-500 mt-1">{{ $request->subject }}</div>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        @if($request->phone)
                        <div>Тел: {{ $request->phone }}</div>
                        @endif
                        @if($request->email)
                        <div>Email: {{ $request->email }}</div>
                        @endif
                        @if($request->call_time)
                        <div>Время звонка: {{ $request->call_time }}</div>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        @if($request->message)
                        <div class="max-w-xs overflow-hidden overflow-ellipsis" title="{{ $request->message }}">
                            {{ Str::limit($request->message, 50) }}
                        </div>
                        @else
                        -
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($request->processed)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Обработан
                        </span>
                        @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Новый
                        </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $request->created_at->format('d.m.Y H:i') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            @if(!$request->processed)
                            <form action="{{ route('admin.contact-requests.mark-as-processed', $request->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="text-blue-600 hover:text-blue-900">
                                    Отметить как обработанный
                                </button>
                            </form>
                            @endif
                            <form action="{{ route('admin.contact-requests.destroy', $request->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Удалить запрос?')">
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
        {{ $requests->links() }}
    </div>
</div>
@endsection