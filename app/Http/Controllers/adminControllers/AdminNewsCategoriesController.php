<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class AdminNewsCategoriesController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::latest()->paginate(10);
        return view('admin.news-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.news-categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:news_categories,name',
            'slug' => 'required|string|unique:news_categories,slug',
        ]);

        NewsCategory::create($validated);

        return redirect()->route('admin.news-categories.index')
            ->with('success', 'Категория успешно создана');
    }

    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.news-categories.edit', compact('newsCategory'));
    }

    public function update(Request $request, NewsCategory $newsCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|',
            'slug' => 'required|string|',
        ]);

        $newsCategory->update($validated);

        return redirect()->route('admin.news-categories.index')
            ->with('success', 'Категория успешно обновлена');
    }

    public function destroy(NewsCategory $newsCategory)
    {
        if ($newsCategory->news()->exists()) {
            return back()->with('error', 'Нельзя удалить категорию с привязанными новостями');
        }

        $newsCategory->delete();

        return back()->with('success', 'Категория успешно удалена');
    }
}
