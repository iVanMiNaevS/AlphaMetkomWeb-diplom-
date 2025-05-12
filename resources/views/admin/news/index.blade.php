@extends('layouts.admin')

@section('title', 'Управление новостями')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h2 class="text-2xl font-bold text-gray-800">Управление новостями</h2>
        <a href="{{ route('admin.news.create') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-700 hover:bg-blue-700 text-white rounded-md shadow-sm transition-colors">
            Добавить новость
        </a>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg border border-green-200">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Изображение</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Заголовок</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Категория</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Дата</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Действия</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($news as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ Storage::url($item->image_path) }}" alt="{{ $item->title }}"
                                class="h-10 w-10 object-cover rounded-md shadow-sm">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $item->title }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{ $item->category->name }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $item->created_at->format('d.m.Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.news.edit', $item->id) }}"
                                    class="text-blue-600 hover:text-blue-900 inline-flex items-center">

                                    Ред.
                                </a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-600 hover:text-red-900 inline-flex items-center"
                                        onclick="return confirm('Вы уверены?')">

                                        Удал.
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $news->links() }}
    </div>
</div>
@endsection