@extends('layouts.admin')

@section('title', 'Добавить новость')

@section('content')
<div class="mb-4">
    <h3 class="text-lg font-medium">Добавить новость</h3>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.news.form')
    </form>
</div>
@endsection