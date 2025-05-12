@extends('layouts.admin')

@section('title', 'Редактирование услуги')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Редактирование услуги: {{ $service->title }}</h2>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Название*</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $service->title) }}"
                        class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                                  focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                                  transition duration-200">
                    @error('title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="space-y-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Описание*</label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                                     focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                                     transition duration-200">{{ old('description', $service->description) }}</textarea>
                    @error('description')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="space-y-2">
                    <label for="slug" class="block text-sm font-medium text-gray-700">URL-адрес (slug)*</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $service->slug) }}"
                        class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                                  focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                                  transition duration-200">
                    @error('slug')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-medium
                                   rounded-lg shadow hover:from-blue-700 hover:to-blue-900
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                   transition duration-200">
                        Обновить услугу
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection