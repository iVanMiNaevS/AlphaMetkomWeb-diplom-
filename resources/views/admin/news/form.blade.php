@csrf

@if(isset($news) && $news->id)
@method('PUT')
@endif

<div class="space-y-6">
    <div class="space-y-2">
        <label for="title" class="block text-sm font-medium text-gray-700">Заголовок*</label>
        <input type="text" name="title" id="title" value="{{ old('title', $news->title ?? '') }}"
            class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                      focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                      transition duration-200">
        @error('title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="space-y-2">
        <label for="description" class="block text-sm font-medium text-gray-700">Краткое описание*</label>
        <textarea name="description" id="description" rows="3"
            class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                         focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                         transition duration-200">{{ old('description', $news->description ?? '') }}</textarea>
        @error('description')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="space-y-2">
        <label for="category_id" class="block text-sm font-medium text-gray-700">Категория*</label>
        <select name="category_id" id="category_id"
            class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                       focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                       transition duration-200">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $news->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @error('category_id')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="space-y-2">
        <label for="image" class="block text-sm font-medium text-gray-700">
            {{ isset($news) && $news->id ? 'Новое изображение (оставьте пустым, чтобы не изменять)' : 'Изображение*' }}
        </label>
        <input type="file" name="image" id="image"
            class="block w-full text-gray-500 border-2 border-blue-400 rounded-lg
                      file:mr-4 file:py-2 file:px-4 file:border-0
                      file:text-sm file:font-semibold
                      file:bg-gradient-to-r file:from-blue-600 file:to-blue-800
                      file:text-white file:hover:from-blue-700 file:hover:to-blue-900
                      file:rounded-lg file:cursor-pointer
                      file:transition file:duration-200">
        @error('image')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror

        @if(isset($news) && $news->image_path)
        <div class="mt-3 flex items-center gap-3">
            <img src="{{ Storage::url($news->image_path) }}"
                alt="Текущее изображение"
                class="h-16 w-16 object-cover rounded-lg border-2 border-blue-200">
            <span class="text-sm text-gray-600">Текущее изображение</span>
        </div>
        @endif
    </div>

    <div class="space-y-2">
        <label for="content" class="block text-sm font-medium text-gray-700">Полный текст новости</label>
        <textarea name="content" id="content" rows="6"
            class="w-full px-4 py-2.5 text-gray-900 border-2 border-blue-400 rounded-lg
                         focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                         transition duration-200">{{ old('content', $news->content ?? '') }}</textarea>
        @error('content')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="pt-4">
        <button type="submit"
            class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-medium
                       rounded-lg shadow hover:from-blue-700 hover:to-blue-900
                       focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                       transition duration-200">
            {{ isset($news) && $news->id ? 'Обновить новость' : 'Создать новость' }}
        </button>
    </div>
</div>