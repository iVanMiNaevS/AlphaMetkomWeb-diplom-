<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Http\Request;

class AdminContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('type')->latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        $types = ContactType::all();
        return view('admin.contacts.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact_type_id' => 'required|exists:contact_types,id',
            'title' => 'nullable|string|max:255',
        ]);

        Contact::create($validated);

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Контакт успешно создан');
    }

    public function edit(Contact $contact)
    {
        $types = ContactType::all();
        return view('admin.contacts.edit', compact('contact', 'types'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'contact_type_id' => 'required|exists:contact_types,id',
            'title' => 'nullable|string|max:255',
        ]);

        $contact->update($validated);

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Контакт успешно обновлен');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('success', 'Контакт успешно удален');
    }
}
