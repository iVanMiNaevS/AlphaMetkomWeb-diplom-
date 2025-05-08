@extends('layouts.app')

@section('title', $news->title)

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        <article>
            <div class="mb-8">
                <span class="text-sm text-gray-500">{{ $news->created_at->format('d.m.Y') }} • {{ $news->category->name }}</span>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">{{ $news->title }}</h1>
            </div>

            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full h-auto rounded-lg mb-8">

            <div class="prose prose-lg max-w-none">
                <p class="text-xl text-gray-700 mb-6">{{ $news->description }}</p>

                <div class="news-content">
                    {!! $news->content !!}
                </div>
            </div>
        </article>

        <div class="mt-12">
            <a href="{{ route('news.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Назад к списку новостей
            </a>
        </div>
    </div>
</section>
@endsection