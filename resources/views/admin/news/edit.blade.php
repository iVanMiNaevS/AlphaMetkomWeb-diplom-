@extends('layouts.admin')

@section('title', 'Редактировать новость')

@section('content')
<div class="mb-4">
    <h3 class="text-lg font-medium">Редактировать новость: {{ $news->title }}</h3>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @include('admin.news.form')
    </form>
</div>
@endsection