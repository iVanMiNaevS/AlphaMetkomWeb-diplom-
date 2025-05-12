@extends('layouts.admin')

@section('title', 'Создание категории')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Создание новой категории</h2>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.news-categories.store') }}" method="POST">
            @csrf

            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Название*</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700">URL-адрес*</label>
                    <input type="text" name="slug" id="slug" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('slug')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="bg-blue-700 hover:bg-blue-700 text-white py-2 px-4 rounded-md shadow-sm">
                        Создать категорию
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection