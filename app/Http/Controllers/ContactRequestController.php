<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|in:callback,email',
            'name' => 'required|string|max:255',
        ];

        if ($request->type === 'callback') {
            $rules['phone'] = 'required|string|max:20';
            $rules['call_time'] = 'required|string|max:50';
        } else {
            $rules['email'] = 'required|email|max:255';
            $rules['subject'] = 'required|string|max:255';
            $rules['message'] = 'required|string';
        }

        $validated = $request->validate($rules);

        ContactRequest::create($validated);

        return back()->with('success', $request->type === 'callback'
            ? 'Ваш запрос на звонок принят! Мы свяжемся с вами в указанное время.'
            : 'Ваше сообщение отправлено! Мы ответим вам в ближайшее время.');
    }
}
