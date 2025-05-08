@extends('layouts.app')

@section('title', 'Новости о металлоконструкциях и строительстве')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Новости компании</h1>

        <div class="mb-8 bg-gray-50 p-4 rounded-lg">
            <h2 class="text-lg font-semibold text-gray-800 mb-3">Фильтр по категориям:</h2>
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('news.index') }}"
                    class="px-4 py-2 rounded-full bg-gray-200  hover:bg-blue-50 transition">
                    Все новости
                </a>
                @foreach($categories as $category)
                <a href="/news/category/{{$category->id}}"
                    class="px-4 py-2 rounded-full bg-gray-200 hover:bg-blue-50 transition">
                    {{ $category->name }}
                </a>
                @endforeach
            </div>
        </div>

        @if($news->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($news as $item)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <span>{{ $item->created_at->format('d.m.Y') }}</span>
                        <span class="mx-2">•</span>
                        <a href="{{ route('news.index', ['category' => $item->category->slug]) }}"
                            class="hover:text-blue-600">{{ $item->category->name }}</a>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $item->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($item->description, 120) }}</p>
                    <a href="{{ route('news.show', $item) }}" class="text-blue-600 hover:text-blue-800 font-medium">Читать далее →</a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="bg-gray-50 p-8 rounded-lg text-center">
            <p class="text-gray-600">Новости по выбранной категории не найдены.</p>
        </div>
        @endif

        <div class="mt-12">
            {{ $news->withQueryString()->links() }}
        </div>
    </div>
</section>
@endsection