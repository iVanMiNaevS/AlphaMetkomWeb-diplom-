<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $categories = NewsCategory::all();
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:news_categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('news', 'public');

        News::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
            'image_path' => $imagePath,
            'content' => $validated['content'],
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно создана');
    }

    public function edit(News $news)
    {
        $categories = NewsCategory::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:news_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($news->image_path);

            $imagePath = $request->file('image')->store('news', 'public');
            $validated['image_path'] = $imagePath;
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно обновлена');
    }

    public function destroy(News $news)
    {
        Storage::disk('public')->delete($news->image_path);

        $news->delete();

        return back()->with('success', 'Новость успешно удалена');
    }
}
