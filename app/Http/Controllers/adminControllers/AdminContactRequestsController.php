<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;

class AdminContactRequestsController extends Controller
{
    public function index()
    {
        $requests = ContactRequest::latest()->paginate(10);
        return view('admin.contact-requests.index', compact('requests'));
    }

    public function markAsProcessed(ContactRequest $request)
    {
        $request->update(['processed' => true]);
        return back()->with('success', 'Запрос помечен как обработанный');
    }

    public function destroy(ContactRequest $request)
    {
        $request->delete();
        return back()->with('success', 'Запрос успешно удален');
    }
}
