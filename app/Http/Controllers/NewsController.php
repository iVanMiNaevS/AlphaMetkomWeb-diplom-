<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::all();
        $selectedCategory = request('category');

        $news = News::with('category')
            ->latest()
            ->paginate(6);

        return view('news.index', compact('news', 'categories', 'selectedCategory'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function byCategory(NewsCategory $category)
    {
        $news = $category->news()
            ->latest()
            ->paginate(6);
        $categories = NewsCategory::all();
        return view('news.category', [
            'news' => $news,
            'categories' => $categories
        ]);
    }
}
