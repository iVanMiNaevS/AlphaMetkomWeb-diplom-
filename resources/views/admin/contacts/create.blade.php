@extends('layouts.admin')

@section('title', 'Добавление контакта')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Добавление нового контакта</h2>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.contacts.store') }}" method="POST">
            @csrf

            <div class="space-y-4">
                <div>
                    <label for="contact_type_id" class="block text-sm font-medium text-gray-700">Тип контакта*</label>
                    <select name="contact_type_id" id="contact_type_id" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('contact_type_id')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Значение</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="bg-blue-700 hover:bg-blue-700 text-white py-2 px-4 rounded-md shadow-sm">
                        Создать контакт
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection